<?php
/**
 * Created by PhpStorm.
 * User: Aks
 * Date: 28.02.14
 * Time: 13:17
 */

namespace COS;

class CosAdminAction extends CosApi {

	public function SecuritySymmetricKeyExchange($rsamodule, $rsapublic) {
		$result = $this->exec(0, 1, array(
			'rsamodule' => $rsamodule,
			'rsapublic' => $rsapublic
		));

		return $result;
	}

	public function SecurityGetAuthCode($webuniquekey) {
		$result = $this->exec(0, 3, array(
			'webuniquekey' => $webuniquekey
		));

		return $result;
	}

	public function MailSendSingle($SenderCName, $ReceiverCID, $ReceiverCName, $Subject, $Content, $ItemIDList, $Cash, $Electrum) {
		$result = $this->exec(100, 1, array(
			'SenderCName'   => $SenderCName,
			'ReceiverCID'   => $ReceiverCID,
			'ReceiverCName' => $ReceiverCName,
			'Subject'       => $Subject,
			'Content'       => $Content,
			'ItemIDList'    => $ItemIDList,
			'Cash'          => $Cash,
			'Electrum'      => $Electrum
		));

		return $result;
	}

	public function MailSendMulti($SenderCName, $ReceiverCID = array(), $ReceiverCName = array(), $Subject, $Content, $ItemIDList, $Cash, $Electrum) {
		$result = $this->exec(100, 2, array(
			'SenderCName'   => $SenderCName,
			'ReceiverCID'   => $ReceiverCID,
			'ReceiverCName' => $ReceiverCName,
			'Subject'       => $Subject,
			'Content'       => $Content,
			'ItemIDList'    => $ItemIDList,
			'Cash'          => $Cash,
			'Electrum'      => $Electrum
		));

		return $result;
	}

	public function MailSendBroadcast($SenderCName, $Subject, $Content, $ItemIDList, $Cash, $Electrum) {
		$result = $this->exec(100, 3, array(
			'SenderCName' => $SenderCName,
			'Subject'     => $Subject,
			'Content'     => $Content,
			'ItemIDList'  => $ItemIDList,
			'Cash'        => $Cash,
			'Electrum'    => $Electrum,
		));

		return $result;
	}

	public function MailSendSingleGift($SenderCName, $ReceiverCID, $ReceiverCName, $Subject, $Content, $GiftId) {
		$result = $this->exec(100, 4, array(
			'SenderCName'   => $SenderCName,
			'ReceiverCID'   => $ReceiverCID,
			'ReceiverCName' => $ReceiverCName,
			'Subject'       => $Subject,
			'Content'       => $Content,
			'GiftId'        => $GiftId
		));

		return $result;
	}

	public function GMTransfer($type, $uid = array(), $cid = array(), $MapID, $PortalID, $X, $Y, $Z) {
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

	public function GMMute($operation, $type, $uid = array(), $cid = array(), $duration) {
		$result = $this->exec(101, 2, array(
			'operation' => $operation,
			'type'      => $type,
			'uid'       => $uid,
			'cid'       => $cid,
			'duration'  => $duration
		));

		return $result;
	}

	public function GMKick($type, $uid = array(), $cid = array()) {
		$result = $this->exec(101, 3, array(
			'type' => $type,
			'uid'  => $uid,
			'cid'  => $cid
		));

		return $result;
	}

	public function GMBroadcast($txt) {
		$result = $this->exec(101, 4, array(
			'txt' => $txt
		));

		return $result;
	}

	public function GMQueryCharacter($uid) {
		$result = $this->exec(101, 5, array(
			'uid' => $uid
		));

		return $result;
	}

	public function GMUserRecharge($adminUID, $uid, $merid, $tranno, $amount, $money, $type) {
		$result = $this->exec(101, 6, array(
			'adminUID' => $adminUID,
			'uid'      => $uid,
			'merid'    => $merid,
			'tranno'   => $tranno,
			'amount'   => $amount,
			'money'    => $money,
			'type'     => $type
		));

		return $result;
	}

	public function GMChgUserElectrum($uid, $type, $amount) {
		$result = $this->exec(101, 7, array(
			'uid'    => $uid,
			'type'   => $type,
			'amount' => $amount
		));

		return $result;
	}

	public function GMGetUserElectrum($uid) {
		$result = $this->exec(101, 8, array(
			'uid' => $uid
		));

		return $result;
	}

	public function GMBanPlayerForever($cid) {
		$result = $this->exec(101, 9, array(
			'cid' => $cid
		));

		return $result;
	}

	public function GMBanPlayerPeriod($cid, $time) {
		$result = $this->exec(101, 10, array(
			'cid'  => $cid,
			'time' => $time
		));

		return $result;
	}

	public function GMUnbanPlayer($cid) {
		$result = $this->exec(101, 11, array(
			'cid' => $cid
		));

		return $result;
	}

	public function GMGiveCoupon($cid, $coupon) {
		$result = $this->exec(101, 12, array(
			'cid'    => $cid,
			'coupon' => $coupon
		));

		return $result;
	}

	public function GMReloadConfig() {
		$result = $this->exec(101, 13, array(
			'uid' => -1
		));

		return $result;
	}

	public function GMResumeCharacter($cid) {
		$result = $this->exec(101, 14, array(
			'cis' => $cid
		));

		return $result;
	}

	public function GMMailEquip($shilling, $stacked, $eid) {
		$result = $this->exec(101, 15, array(
			'shilling' => $shilling,
			'stacked'  => $stacked,
			'eid'      => $eid
		));

		return $result;
	}

	public function GMNewServerEvent($event, $status) {
		$result = $this->exec(101, 16, array(
			'event'  => $event,
			'status' => $status
		));

		return $result;
	}

	public function GMStartServerTime($time) {
		$result = $this->exec(101, 17, array(
			'time' => $time
		));

		return $result;
	}

	public function GMQueryVipPoint($uid) {
		$result = $this->exec(101, 18, array(
			'uid' => $uid
		));

		return $result;
	}

	public function GMChangeVipPoint($uid, $value) {
		$result = $this->exec(101, 19, array(
			'uid'   => $uid,
			'value' => $value
		));

		return $result;
	}

	public function GameParamGetParamList() {
		$result = $this->exec(102, 1, array(
			'uid' => -1
		));

		return $result;
	}

	public function GameParamSetExpRating($exprating) {
		$result = $this->exec(102, 2, array(
			'exprating' => $exprating
		));

		return $result;
	}

	public function GameParamSetIsServerOpen($isServerOpen) {
		$result = $this->exec(102, 3, array(
			'isServerOpen' => $isServerOpen
		));

		return $result;
	}

	public function ServerStatusGetOnlineCount() {
		$result = $this->exec(103, 1, array(
			'uid' => -1
		));

		return $result;
	}

	public function ServerStatusGetUserCharacterCount($uid) {
		$result = $this->exec(103, 2, array(
			'uid' => $uid
		));

		return $result;
	}

	public function ServerStatusGetAllCharacterCount($level) {
		$result = $this->exec(103, 3, array(
			'level' => $level
		));

		return $result;
	}

	public function ServerStatusGetServerOpenState($uid) {
		$result = $this->exec(103, 4, array(
			'uid' => -1
		));

		return $result;
	}

	public function GiftServerMake($uid, $giftid, $server, $len, $count, $time) {
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

	public function GiftQuery($uid, $gifttype) {
		$result = $this->exec(104, 2, array(
			'uid'      => $uid,
			'gifttype' => $gifttype
		));

		return $result;
	}

	public function GiftServerMakeLimitCount($uid, $giftid, $server, $len, $count, $time, $limit) {
		$result = $this->exec(104, 3, array(
			'uid'    => $uid,
			'giftid' => $giftid,
			'server' => $server,
			'len'    => $len,
			'count'  => $count,
			'time'   => $time,
			'limit'  => $limit
		));

		return $result;
	}

	public function __construct($name, $cfg, $storage) {
		parent::__construct($name, $cfg, $storage);
	}
}

