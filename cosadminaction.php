<?php
/**
 * Created by PhpStorm.
 * User: Aks
 * Date: 28.02.14
 * Time: 13:17
 */

namespace COS;

class CosAdminAction extends CosApi {

	//	protected $flag = 0XFFFFFFFE;

	// Admin API

	public function SendMailToCharacter($SenderCName, $Subject, $Content, $ReceiverCID, $ReceiverCName, $ItemIDList, $Cash, $Electrum) {
		$result = $this->exec(100, 1, array(
			'SenderCName'   => $SenderCName,
			'Subject'       => $Subject,
			'Content'       => $Content,
			'ReceiverCID'   => $ReceiverCID,
			'ReceiverCName' => $ReceiverCName,
			'ItemIDList'    => $ItemIDList,
			'Cash'          => $Cash,
			'Electrum'      => $Electrum
		));

		return $result;
	}

	public function SendMailToCharacterList($SenderCName, $Subject, $Content, $ReceiverCID = array(), $ReceiverCName = array(), $ItemIDList, $Cash, $Electrum) {
		$result = $this->exec(100, 2, array(
			'SenderCName'   => $SenderCName,
			'Subject'       => $Subject,
			'Content'       => $Content,
			'ReceiverCID'   => $ReceiverCID,
			'ReceiverCName' => $ReceiverCName,
			'ItemIDList'    => $ItemIDList,
			'Cash'          => $Cash,
			'Electrum'      => $Electrum
		));

		return $result;
	}

	public function SendMailToCharacterAll($SenderCName, $Subject, $Content, $ItemIDList, $Cash, $Electrum) {
		$result = $this->exec(100, 3, array(
			'SenderCName' => $SenderCName,
			'Subject'     => $Subject,
			'Content'     => $Content,
			'ItemIDList'  => $ItemIDList,
			'Cash'        => $Cash,
			'Electrum'    => $Electrum
		));

		return $result;
	}

	public function PlayerTransferMap($type, $uid = array(), $cid = array(), $MapID, $PortalID, $X, $Y, $Z) {
		$result = $this->exec(101, 1, array(
			'type'     => $type,
			'uid'      => $uid,
			'cid'      => $cid,
			'MapID'    => $MapID,
			'PortalID' => $PortalID,
			'X'        => $X,
			'Y'        => $Y,
			'Z'        => $Z
		));

		return $result;
	}

	public function PlayerForbidSpeech($operation, $type, $uid = array(), $cid = array(), $duration) {
		$result = $this->exec(101, 2, array(
			'operation' => $operation,
			'type'      => $type,
			'uid'       => $uid,
			'cid'       => $cid,
			'duration'  => $duration
		));

		return $result;
	}

	public function PlayerForcedOffline($type, $uid = array(), $cid = array()) {
		$result = $this->exec(101, 3, array(
			'type' => $type,
			'uid'  => $uid,
			'cid'  => $cid
		));

		return $result;
	}

	public function ServerNotification($txt) {
		$result = $this->exec(101, 4, array(
			'txt' => $txt
		));

		return $result;
	}

	public function SeachAccountInfo($uid) {
		$result = $this->exec(101, 5, array(
			'uid' => $uid
		));

		return $result;
	}

	public function GmElectrumAdd($adminuid, $uid, $merid, $tranno, $amount, $money, $type) {
		$result = $this->exec(101, 6, array(
			'adminuid' => $adminuid,
			'uid'      => $uid,
			'merid'    => $merid,
			'tranno'   => $tranno,
			'amount'   => $amount,
			'money'    => $money,
			'type'     => $type
		));

		return $result;
	}

	public function GmUserOperatedElectrum($uid, $type, $amount) {
		$result = $this->exec(101, 7, array(
			'uid'    => $uid,
			'type'   => $type,
			'amount' => $amount
		));

		return $result;
	}

	public function GmUserSearchElectrum($uid) {
		$result = $this->exec(101, 8, array(
			'uid' => $uid
		));

		return $result;
	}

	public function CharacterForbidEver($cid) {
		$result = $this->exec(101, 9, array(
			'cid' => $cid
		));

		return $result;
	}

	public function CharacterForbidCycle($cid, $time) {
		$result = $this->exec(101, 10, array(
			'cid'  => $cid,
			'time' => $time
		));

		return $result;
	}

	public function CharacterDearchive($cid) {
		$result = $this->exec(101, 11, array(
			'cid' => $cid
		));

		return $result;
	}

	public function CharacterToCoupon($cid, $coupon) {
		$result = $this->exec(101, 12, array(
			'cid'    => $cid,
			'coupon' => $coupon
		));

		return $result;
	}

	public function PlayerOnlineNum() {
		$result = $this->exec(103, 1, array(
			'uid' => -1
		));

		return $result;
	}

	public function GetPlayerOfCharacterNum($uid) {
		$result = $this->exec(103, 2, array(
			'uid' => $uid
		));

		return $result;
	}

	public function CreateGiftID($uid, $giftid, $server, $len, $count, $time) {
		$result = $this->exec(104, 1, array(
			'uid'    => $uid,
			'giftid' => $giftid,
			'server' => $server,
			'len'    => $len,
			'count'  => $count,
			'time'   => $time
		));

		return $result;
	}

	public function __construct($name, $cfg) {
		parent::__construct($name, $cfg);
	}
}

