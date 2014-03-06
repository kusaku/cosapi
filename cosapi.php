<?php

namespace COS;

class CosApi {

	private $name;
	private $server;
	private $port;
	private $username;
	private $password;
	private $storage;

	private $socket;

	private $flag = 0XFFFFFFFF;
	private $rsa_key;

	private function encrypt($str) {
		return bin2hex($str ^ str_pad('', strlen($str), hex2bin($this->rsa_key)));
	}

	private function decrypt($srt) {
		return hex2bin($srt) ^ hex2bin(str_pad('', strlen($srt), $this->rsa_key));
	}

	private function get_rsa_key() {
		static $rsa_key;
		if (!isset($rsa_key)) {
			$config = array(
				'digest_alg'       => 'sha512',
				'private_key_bits' => 1024,
				'private_key_type' => OPENSSL_KEYTYPE_RSA,
			);

			// Create the private and public key
			$rsa_key = openssl_pkey_new($config);
		}

		return $rsa_key;
	}

	private function get_rsa_key_module() {
		static $rsa_key_module;
		if (!isset($rsa_key_module)) {
			$datails        = openssl_pkey_get_details($this->get_rsa_key());
			$rsa_key_module = gmp_strval(gmp_init('0x' . unpack('H*', $datails['rsa']['n'])[1]));
		}

		return $rsa_key_module;
	}

	private function get_rsa_key_public() {
		static $rsa_key_public;
		if (!isset($rsa_key_public)) {
			$datails        = openssl_pkey_get_details($this->get_rsa_key());
			$rsa_key_public = gmp_strval(gmp_init('0x' . unpack('H*', $datails['rsa']['e'])[1]));
		}

		return $rsa_key_public;
	}

	private function key() {
		static $key;
		if (!$this->rsa_key) {
			$key = $this->storage->load(array('@name=?', $this->name));
			if (!$key) {

				$payload = json_encode(array('rsamodule' => $this->get_rsa_key_module(), 'rsapublic' => $this->get_rsa_key_public()));
				$packet  = json_encode(array("major" => 0, "minor" => 1, "payload" => $payload));

				$this->write($packet);
				$packet = $this->read();

				$payload = json_decode(json_decode($packet)->payload);

				openssl_private_decrypt(base64_decode($payload->rsaencryptkey), $rsa_key, $this->get_rsa_key());

				$key = $this->storage;
				$key->insert();
				$key->name    = $this->name;
				$key->flag    = $payload->flag;
				$key->rsa_key = $rsa_key;
				$key->save();
			}
		}

		return $key;
	}

	protected function get_authcode() {
		$webuniquekey = md5(uniqid(rand(), true));

		$data = array(
			'major'   => 0,
			'minor'   => 0,
			'payload' => json_encode(
				array(
					'uid'          => -1,
					'webuniquekey' => $webuniquekey
				))
		);

		if ($this instanceof CosGameAction) {
			$data['major'] = 1;
			$data['minor'] = 13;
		}

		if ($this instanceof CosAdminAction) {
			$data['major'] = 0;
			$data['minor'] = 3;
		}

		$packet = $this->encrypt(json_encode($data));

		$this->write($packet);
		$packet = $this->read();

		$data     = json_decode($this->decrypt($packet));
		$authcode = json_decode($data->payload)->authcode;

		return "{$webuniquekey}|{$authcode}";
	}

	protected function exec($major, $minor, $payload) {
		$data = array(
			'major'    => $major,
			'minor'    => $minor,
			'payload'  => json_encode($payload),
			'authcode' => $this->get_authcode()
		);

		$packet = $this->encrypt(json_encode($data));

		$this->write($packet);
		$packet = $this->read();

		$data = json_decode($this->decrypt($packet));

		if ($data->major != $major || $data->minor != $minor) {
			throw new \Exception("Protocol API error! ({$data->major} != {$major} || {$data->minor} != {$minor})");
		}

		return json_decode($data->payload);
	}

	protected function read() {
		socket_recv($this->socket, $bytes, 4, MSG_WAITALL);
		$length = unpack('Nlength', $bytes)['length'];
		socket_recv($this->socket, $binpacket, $length, MSG_WAITALL);
		$packet = unpack("Nflag/nlength/a*data", $binpacket);
		if ($packet['flag'] != $this->flag) {
			throw new \Exception("Packet flag mismatch! ({$packet['flag']} != {$this->flag})");
		}
		if ($packet['length'] != $length = strlen($packet['data'])) {
			throw new \Exception("Packet length mismatch!  ({$packet['length']} != {$length})");
		}

		return $packet['data'];
	}

	protected function write($packet) {
		$binpacket = pack('N', $this->flag) . $packet;
		$binpacket = pack('N', strlen($binpacket)) . $binpacket;
		socket_send($this->socket, $binpacket, strlen($binpacket), MSG_WAITALL);
	}

	protected function init() {
		if (!isset($this->socket)) {
			$this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
			$status       = socket_connect($this->socket, $this->server, $this->port);
			if (!$status) {
				$errnum = socket_last_error($this->socket);
				$error  = socket_strerror($errnum);
				throw new \Exception($error, $errnum);
			}

			$binpacket = pack('n', strlen($this->username)) . $this->username . pack('n', strlen($this->password)) . $this->password;
			$binpacket = pack('N', strlen($binpacket)) . $binpacket;

			socket_send($this->socket, $binpacket, strlen($binpacket), MSG_WAITALL);
			socket_recv($this->socket, $bytes, 4, MSG_WAITALL);

			if ($bytes === null) {
				$errnum = socket_last_error($this->socket);
				$error  = socket_strerror($errnum);
				throw new \Exception($error, $errnum);
			}

			$length = unpack('Nlength', $bytes)['length'];
			socket_recv($this->socket, $binpacket, $length, MSG_WAITALL);
			$packet = unpack('nsize/a' . unpack('n', $binpacket)[1] . 'login/Nsocket_id', $binpacket);

			if ($packet['login'] != $this->username) {
				throw new \Exception("Username mismatch! ({$packet['login']} != {$this->username})");
			}

			if (!$packet['socket_id'] > 0) {
				throw new \Exception("Server socket error! ({$packet['socket_id']})");
			}

			$this->flag    = $this->key()->flag;
			$this->rsa_key = $this->key()->rsa_key;
		}
	}

	public function __construct($name, $cfg, $storage) {
		$this->name     = $name;
		$this->server   = $cfg['server'];
		$this->port     = $cfg['port'];
		$this->username = $cfg['username'];
		$this->password = $cfg['password'];
		$this->storage  = $storage;
		$this->init();
	}

	public function __destruct() {
		if ($this->socket) {
			socket_close($this->socket);
		}
	}
}
