<?php

namespace COS;

class CosPlatformAction extends CosApi {

	/**
	 * @param string $rsamodule
	 * @param string $rsapublic
	 * @return object
	 */
	public function SecuritySymmetricKeyExchange($rsamodule, $rsapublic) {
		$result = $this->exec(0, 1, array(
			'rsamodule' => $rsamodule,
			'rsapublic' => $rsapublic
		));

		return $result;
	}

	/**
	 * @param int $gameid
	 * @return object
	 */
	public function SecurityIDExchange($gameid) {
		$result = $this->exec(0, 3, array(
			'gameid' => $gameid
		));

		return $result;
	}

	/**
	 * @return object
	 */
	public function SecurityRefreshConf() {
		$result = $this->exec(0, 4, array());

		return $result;
	}

	/**
	 * @param string $username
	 * @param string $userpwd
	 * @param string $fromip
	 * @return object
	 */
	public function UserVerify($username, $userpwd, $fromip) {
		$result = $this->exec(1, 1, array(
			'username' => $username,
			'userpwd'  => $userpwd,
			'fromip'   => $fromip
		));

		return $result;
	}

	/**
	 * @param string $username
	 * @param string $userpwd
	 * @param string $nickname
	 * @param int $subscribenews
	 * @param string $adfrom
	 * @param string $regip
	 * @param string $realname
	 * @param string $idcardno
	 * @param string $email
	 * @param string $cellphone
	 * @return object
	 */
	public function UserReg($username, $userpwd, $nickname, $subscribenews, $adfrom, $regip, $realname, $idcardno, $email, $cellphone) {
		$result = $this->exec(1, 2, array(
			'username'      => $username,
			'userpwd'       => $userpwd,
			'nickname'      => $nickname,
			'subscribenews' => $subscribenews,
			'adfrom'        => $adfrom,
			'regip'         => $regip,
			'realname'      => $realname,
			'idcardno'      => $idcardno,
			'email'         => $email,
			'cellphone'     => $cellphone
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @param string $olduserpwd
	 * @param string $newuserpwd
	 * @param string $fromip
	 * @return object
	 */
	public function UserChgPwd($uid, $token, $olduserpwd, $newuserpwd, $fromip) {
		$result = $this->exec(1, 3, array(
			'uid'        => $uid,
			'token'      => $token,
			'olduserpwd' => $olduserpwd,
			'newuserpwd' => $newuserpwd,
			'fromip'     => $fromip
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param iny $targetuid
	 * @param string $newuserpwd
	 * @return object
	 */
	public function UserResetPwd($adminuid, $targetuid, $newuserpwd) {
		$result = $this->exec(1, 4, array(
			'adminuid'   => $adminuid,
			'targetuid'  => $targetuid,
			'newuserpwd' => $newuserpwd
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $targetuid
	 * @param string $newnickname
	 * @return object
	 */
	public function UserResetNickNam($adminuid, $targetuid, $newnickname) {
		$result = $this->exec(1, 5, array(
			'adminuid'    => $adminuid,
			'targetuid'   => $targetuid,
			'newnickname' => $newnickname
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @param string $fromip
	 * @param array $modifyitem
	 * @return object
	 */
	public function UserModifyInfo($uid, $token, $fromip, $modifyitem = array()) {
		$result = $this->exec(1, 6, array(
			'uid'        => $uid,
			'token'      => $token,
			'fromip'     => $fromip,
			'modifyitem' => $modifyitem
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $gameid
	 * @param string $token
	 * @return object
	 */
	public function UserGetRoleType($uid, $gameid, $token) {
		$result = $this->exec(1, 7, array(
			'uid'    => $uid,
			'gameid' => $gameid,
			'token'  => $token
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $targetuid
	 * @param int $gameid
	 * @param int $roletype
	 * @return object
	 */
	public function UserSetRoleType($adminuid, $targetuid, $gameid, $roletype) {
		$result = $this->exec(1, 8, array(
			'adminuid'  => $adminuid,
			'targetuid' => $targetuid,
			'gameid'    => $gameid,
			'roletype'  => $roletype
		));

		return $result;
	}

	/**
	 * @param string $type
	 * @param array $userinfo
	 * @return object
	 */
	public function User3rdPlatform($type, $userinfo = array()) {
		$result = $this->exec(1, 9, array(
			'type'     => $type,
			'userinfo' => $userinfo
		));

		return $result;
	}

	/**
	 * @param string $type
	 * @param array $currencyswap
	 * @return object
	 */
	public function User3rdPlatformCurrencySwap($type, $currencyswap = array()) {
		$result = $this->exec(1, 10, array(
			'type'         => $type,
			'currencyswap' => $currencyswap
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $targetuid
	 * @param int $newaccountstatus
	 * @return object
	 */
	public function UserChgAccountStatus($adminuid, $targetuid, $newaccountstatus) {
		$result = $this->exec(1, 11, array(
			'adminuid'         => $adminuid,
			'targetuid'        => $targetuid,
			'newaccountstatus' => $newaccountstatus
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @return object
	 */
	public function UserVerifyToken($uid, $token) {
		$result = $this->exec(1, 12, array(
			'uid'   => $uid,
			'token' => $token
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @param string $webuniquekey
	 * @return object
	 */
	public function UserGetAuthCode($uid, $token, $webuniquekey) {
		$result = $this->exec(1, 13, array(
			'uid'          => $uid,
			'token'        => $token,
			'webuniquekey' => $webuniquekey
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param string $targetusername
	 * @param string $newuserpwd
	 * @return object
	 */
	public function UserResetPwdByUserName($adminuid, $targetusername, $newuserpwd) {
		$result = $this->exec(1, 14, array(
			'adminuid'       => $adminuid,
			'targetusername' => $targetusername,
			'newuserpwd'     => $newuserpwd
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $targetuid
	 * @param int $gameid
	 * @param int $addviptime
	 * @return object
	 */
	public function UserAddUserVipTime($adminuid, $targetuid, $gameid, $addviptime) {
		$result = $this->exec(1, 15, array(
			'adminuid'   => $adminuid,
			'targetuid'  => $targetuid,
			'gameid'     => $gameid,
			'addviptime' => $addviptime
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param string $targetusername
	 * @param int $gameid
	 * @param int $addviptime
	 * @return object
	 */
	public function UserAddUserVipTimeByUName($adminuid, $targetusername, $gameid, $addviptime) {
		$result = $this->exec(1, 16, array(
			'adminuid'       => $adminuid,
			'targetusername' => $targetusername,
			'gameid'         => $gameid,
			'addviptime'     => $addviptime
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $fromIP
	 * @param string $token
	 * @return object
	 */
	public function UserUserLogout($uid, $fromIP, $token) {
		$result = $this->exec(1, 17, array(
			'uid'    => $uid,
			'fromIP' => $fromIP,
			'token'  => $token
		));

		return $result;
	}

	/**
	 * @param string $type
	 * @param array $userinfo
	 * @return object
	 */
	public function UserGet3rdUserId($type, $userinfo = array()) {
		$result = $this->exec(1, 18, array(
			'type'     => $type,
			'userinfo' => $userinfo
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @param string $fromip
	 * @param string $realname
	 * @param string $idcardno
	 * @return object
	 */
	public function UserModifyIDCardInfo($uid, $token, $fromip, $realname, $idcardno) {
		$result = $this->exec(1, 19, array(
			'uid'      => $uid,
			'token'    => $token,
			'fromip'   => $fromip,
			'realname' => $realname,
			'idcardno' => $idcardno
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @param string $fromip
	 * @param string $cellphone
	 * @return object
	 */
	public function UserModifyCellphone($uid, $token, $fromip, $cellphone) {
		$result = $this->exec(1, 20, array(
			'uid'       => $uid,
			'token'     => $token,
			'fromip'    => $fromip,
			'cellphone' => $cellphone
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param string $token
	 * @param string $fromIP
	 * @param string $question
	 * @param string $answer
	 * @return object
	 */
	public function UserModifySecurity($uid, $token, $fromIP, $question, $answer) {
		$result = $this->exec(1, 21, array(
			'uid'      => $uid,
			'token'    => $token,
			'fromIP'   => $fromIP,
			'question' => $question,
			'answer'   => $answer
		));

		return $result;
	}

	/**
	 * @param string $email
	 * @param string $fromip
	 * @return object
	 */
	public function UserGetInfoByEMail($email, $fromIP) {
		$result = $this->exec(1, 22, array(
			'email'  => $email,
			'fromIP' => $fromIP
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $gameid
	 * @param string $token
	 * @return object
	 */
	public function ElectrumQuery($uid, $gameid, $token) {
		$result = $this->exec(2, 1, array(
			'uid'    => $uid,
			'gameid' => $gameid,
			'token'  => $token
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $gameid
	 * @param string $token
	 * @param int $amount
	 * @param float $money
	 * @param string $orderid
	 * @param string $ordertype
	 * @return object
	 */
	public function ElectrumInc($uid, $gameid, $token, $amount, $money, $orderid, $ordertype) {
		$result = $this->exec(2, 2, array(
			'uid'       => $uid,
			'gameid'    => $gameid,
			'token'     => $token,
			'amount'    => $amount,
			'money'     => $money,
			'orderid'   => $orderid,
			'ordertype' => $ordertype
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $gameid
	 * @param string $token
	 * @param int $amount
	 * @param float $money
	 * @param string $orderid
	 * @param string $ordertype
	 * @return object
	 */
	public function ElectrumDec($uid, $gameid, $token, $amount, $money, $orderid, $ordertype) {
		$result = $this->exec(2, 3, array(
			'uid'       => $uid,
			'gameid'    => $gameid,
			'token'     => $token,
			'amount'    => $amount,
			'money'     => $money,
			'orderid'   => $orderid,
			'ordertype' => $ordertype
		));

		return $result;
	}

	/**
	 * @param int $gameid
	 * @return object
	 */
	public function ElectrumReset($gameid) {
		$result = $this->exec(2, 4, array(
			'gameid' => $gameid
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $uid
	 * @param int $gameid
	 * @param int $amount
	 * @param float $money
	 * @param string $orderid
	 * @param string $ordertype
	 * @return object
	 */
	public function ElectrumAdminInc($adminuid, $uid, $gameid, $amount, $money, $orderid, $ordertype) {
		$result = $this->exec(2, 5, array(
			'adminuid'  => $adminuid,
			'uid'       => $uid,
			'gameid'    => $gameid,
			'amount'    => $amount,
			'money'     => $money,
			'orderid'   => $orderid,
			'ordertype' => $ordertype
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $uid
	 * @param int $gameid
	 * @param int $amount
	 * @param float $money
	 * @param string $orderid
	 * @param string $ordertype
	 * @return object
	 */
	public function ElectrumAdminDec($adminuid, $uid, $gameid, $amount, $money, $orderid, $ordertype) {
		$result = $this->exec(2, 6, array(
			'adminuid'  => $adminuid,
			'uid'       => $uid,
			'gameid'    => $gameid,
			'amount'    => $amount,
			'money'     => $money,
			'orderid'   => $orderid,
			'ordertype' => $ordertype
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $gameid
	 * @param string $token
	 * @return object
	 */
	public function PerkQuery($uid, $gameid, $token) {
		$result = $this->exec(3, 1, array(
			'uid'    => $uid,
			'gameid' => $gameid,
			'token'  => $token
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $gameid
	 * @param int $token
	 * @param array $perkidlist
	 * @return object
	 */
	public function PerkUnlock($uid, $gameid, $token, $perkidlist = array()) {
		$result = $this->exec(3, 2, array(
			'uid'        => $uid,
			'gameid'     => $gameid,
			'token'      => $token,
			'perkidlist' => $perkidlist
		));

		return $result;
	}

	/**
	 * @param int $adminuid
	 * @param int $uid
	 * @param int $gameid
	 * @param array $perkidlist
	 * @return object
	 */
	public function PerkAdminUnlock($adminuid, $uid, $gameid, $perkidlist = array()) {
		$result = $this->exec(3, 3, array(
			'adminuid'   => $adminuid,
			'uid'        => $uid,
			'gameid'     => $gameid,
			'perkidlist' => $perkidlist
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param string $username
	 * @param string $authcode
	 * @param int $gameid
	 * @return object
	 */
	public function GameVerify($serialize, $username, $authcode, $gameid) {
		$result = $this->exec(4, 1, array(
			'serialize' => $serialize,
			'username'  => $username,
			'authcode'  => $authcode,
			'gameid'    => $gameid
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param string $username
	 * @param string $authcode
	 * @param int $gameid
	 * @return object
	 */
	public function GameCheck($serialize, $username, $userpwd, $gameid) {
		$result = $this->exec(4, 2, array(
			'serialize' => $serialize,
			'username'  => $username,
			'userpwd'   => $userpwd,
			'gameid'    => $gameid
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param int $uid
	 * @param int $gameid
	 * @return object
	 */
	public function GameGetElectrum($serialize, $uid, $gameid) {
		$result = $this->exec(4, 3, array(
			'serialize' => $serialize,
			'uid'       => $uid,
			'gameid'    => $gameid
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param int $uid
	 * @param int $gameid
	 * @param int $type
	 * @param int $electrum
	 * @return object
	 */
	public function GameChangeElectrum($serialize, $uid, $gameid, $type, $electrum) {
		$result = $this->exec(4, 4, array(
			'serialize' => $serialize,
			'uid'       => $uid,
			'gameid'    => $gameid,
			'type'      => $type,
			'electrum'  => $electrum

		));

		return $result;
	}

	public function GameGetPerkList($from, $serialize, $uid, $gameid) {
		$result = $this->exec(4, 5, array(
			'from'      => $from,
			'serialize' => $serialize,
			'uid'       => $uid,
			'gameid'    => $gameid

		));

		return $result;
	}

	/**
	 * @param int $from
	 * @param int $serialize
	 * @param int $uid
	 * @param int $gameid
	 * @param int $perkid
	 * @return object
	 */
	public function GameUnlockPerk($from, $serialize, $uid, $gameid, $perkid) {
		$result = $this->exec(4, 6, array(
			'from'      => $from,
			'serialize' => $serialize,
			'uid'       => $uid,
			'gameid'    => $gameid,
			'perkid'    => $perkid

		));

		return $result;
	}

	/**
	 * @param int $timestamp
	 * @return object
	 */
	public function GameHeartBeat($timestamp) {
		$result = $this->exec(4, 8, array(
			'timestamp' => $timestamp
		));

		return $result;
	}

	/**
	 * @param int $instanceid
	 * @param int $gameid
	 * @param int $uid
	 * @param int $cid
	 * @param string $cname
	 * @param int $raceid
	 * @param int $classid
	 * @param int $level
	 * @return object
	 */
	public function GamePlayerLogin($instanceid, $gameid, $uid, $cid, $cname, $raceid, $classid, $level) {
		$result = $this->exec(4, 9, array(
			'instanceid' => $instanceid,
			'gameid'     => $gameid,
			'uid'        => $uid,
			'cid'        => $cid,
			'cname'      => $cname,
			'raceid'     => $raceid,
			'classid'    => $classid,
			'level'      => $level

		));

		return $result;
	}

	/**
	 * @param int $instanceid
	 * @param int $gameid
	 * @param int $uid
	 * @param int $cid
	 * @return object
	 */
	public function GamePlayerLogout($instanceid, $gameid, $uid, $cid) {
		$result = $this->exec(4, 10, array(
			'instanceid' => $instanceid,
			'gameid'     => $gameid,
			'uid'        => $uid,
			'cid'        => $cid

		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param int $gameid
	 * @param int $uid
	 * @return object
	 */
	public function GameVIPInfo($serialize, $gameid, $uid) {
		$result = $this->exec(4, 12, array(
			'serialize' => $serialize,
			'gameid'    => $gameid,
			'uid'       => $uid
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param int $uid
	 * @return object
	 */
	public function GameGetPlatformRecharge($serialize, $uid) {
		$result = $this->exec(4, 13, array(
			'serialize' => $serialize,
			'uid'       => $uid
		));

		return $result;
	}

	/**
	 * @param int $aduid
	 * @param int $uid
	 * @param int $merid
	 * @param string $tranno
	 * @param string $amount
	 * @param int $type
	 * @param float $money
	 * @return object
	 */
	public function GameServerRechargeNotice($aduid, $uid, $merid, $tranno, $amount, $type, $money) {
		$result = $this->exec(4, 14, array(
			'aduid'  => $aduid,
			'uid'    => $uid,
			'merid'  => $merid,
			'tranno' => $tranno,
			'amount' => $amount,
			'type'   => $type,
			'money'  => $money
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param int $uid
	 * @return object
	 */
	public function GameGetUser3rdInfo($serialize, $uid) {
		$result = $this->exec(4, 15, array(
			'serialize' => $serialize,
			'uid'       => $uid
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param bool $addictive
	 * @return object
	 */
	public function GameAddictiveCheck($uid, $addictive = true) {
		$result = $this->exec(4, 17, array(
			'uid'       => $uid,
			'addictive' => $addictive
		));

		return $result;
	}

	/**
	 * @param int $serialize
	 * @param string $type
	 * @param int $gameid
	 * @param array $userinfo
	 * @return object
	 */
	public function Game3rdPlatform($serialize, $type, $gameid, $userinfo = array()) {
		$result = $this->exec(4, 18, array(
			'serialize' => $serialize,
			'type'      => $type,
			'gameid'    => $gameid,
			'userinfo'  => $userinfo
		));

		return $result;
	}

	/**
	 * @param int $serial
	 * @param int $gameid
	 * @param int $giftid
	 * @param int $usecount
	 * @param int $enabletime
	 * @param int $count
	 * @param int $len
	 * @return object
	 */
	public function GiftCreateGiftCode($serial, $gameid, $giftid, $usecount, $enabletime, $count, $len) {
		$result = $this->exec(5, 0, array(
			'serial'     => $serial,
			'gameid'     => $gameid,
			'giftid'     => $giftid,
			'usecount'   => $usecount,
			'enabletime' => $enabletime,
			'count'      => $count,
			'len'        => $len
		));

		return $result;
	}

	/**
	 * @param int $serial
	 * @param string $giftcode
	 * @param int $gameid
	 * @param int $giftid
	 * @param int $usecount
	 * @param int $enabletime
	 * @return object
	 */
	public function GiftCreateSpecialGiftCode($serial, $giftcode, $gameid, $giftid, $usecount, $enabletime) {
		$result = $this->exec(5, 1, array(
			'serial'     => $serial,
			'giftcode'   => $giftcode,
			'gameid'     => $gameid,
			'giftid'     => $giftid,
			'usecount'   => $usecount,
			'enabletime' => $enabletime
		));

		return $result;
	}

	/**
	 * @param int $serial
	 * @param string $giftcode
	 * @return object
	 */
	public function GiftGetGiftCodeInfo($serial, $giftcode) {
		$result = $this->exec(5, 2, array(
			'serial'   => $serial,
			'giftcode' => $giftcode
		));

		return $result;
	}

	/**
	 * @param int $serial
	 * @param int $uid
	 * @param string $giftcode
	 * @return object
	 */
	public function GiftUseGiftCode($serial, $uid, $giftcode) {
		$result = $this->exec(5, 3, array(
			'serial'   => $serial,
			'uid'      => $uid,
			'giftcode' => $giftcode
		));

		return $result;
	}

	/**
	 * @param int $serial
	 * @param int $gameid
	 * @param int $giftid
	 * @param int $usecount
	 * @param int $enabletime
	 * @param int $len
	 * @return object
	 */
	public function GiftCreateRndGiftCode($serial, $gameid, $giftid, $usecount, $enabletime, $len) {
		$result = $this->exec(5, 4, array(
			'serial'     => $serial,
			'gameid'     => $gameid,
			'giftid'     => $giftid,
			'usecount'   => $usecount,
			'enabletime' => $enabletime,
			'len'        => $len
		));

		return $result;
	}

	public function __construct($name, $cfg) {
		parent::__construct($name, $cfg);
	}
}

