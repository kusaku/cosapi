<?php
/**
 * Created by PhpStorm.
 * User: Aks
 * Date: 28.02.14
 * Time: 13:17
 */

namespace COS;

class CosGameAction extends CosApi {

	/**
	 * @param string $rsamodule
	 * @param string $rsapublic
	 * @return mixed
	 */
	public function SecuritySymmetricKeyExchange($rsamodule, $rsapublic) {
		$result = $this->exec(0, 1, array(
			'rsamodule' => $rsamodule,
			'rsapublic' => $rsapublic
		));

		return $result;
	}

	/**
	 * @param string $webuniquekey
	 * @return mixed
	 */
	public function SecurityGetAuthCode($webuniquekey) {
		$result = $this->exec(0, 3, array(
			'webuniquekey' => $webuniquekey
		));

		return $result;
	}

	/**
	 * @param string $SenderCName
	 * @param int $ReceiverCID
	 * @param string $ReceiverCName
	 * @param string $Subject
	 * @param string $Content
	 * @param string $ItemIDList
	 * @param int $Cash
	 * @param int $Electrum
	 * @return mixed
	 */
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

	/**
	 * @param string $SenderCName
	 * @param array $ReceiverCID
	 * @param array $ReceiverCName
	 * @param string $Subject
	 * @param string $Content
	 * @param string $ItemIDList
	 * @param int $Cash
	 * @param int $Electrum
	 * @return mixed
	 */
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

	/**
	 * @param string $SenderCName
	 * @param string $Subject
	 * @param string $Content
	 * @param string $ItemIDList
	 * @param int $Cash
	 * @param int $Electrum
	 * @return mixed
	 */
	public function MailSendBroadcast($SenderCName, $Subject, $Content, $ItemIDList, $Cash, $Electrum) {
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

	/**
	 * @param string $SenderCName
	 * @param int $ReceiverCID
	 * @param string $ReceiverCName
	 * @param string $Subject
	 * @param string $Content
	 * @param int $GiftId
	 * @return mixed
	 */
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

	/**
	 * @param int $type
	 * @param array $uid
	 * @param array $cid
	 * @param int $MapID
	 * @param int $PortalID
	 * @param int $X
	 * @param int $Y
	 * @param int $Z
	 * @return mixed
	 */
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

	/**
	 * @param int $operation
	 * @param int $type
	 * @param array $uid
	 * @param array $cid
	 * @param int $duration
	 * @return mixed
	 */
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

	/**
	 * @param int $type
	 * @param array $uid
	 * @param array $cid
	 * @return mixed
	 */
	public function GMKick($type, $uid = array(), $cid = array()) {
		$result = $this->exec(101, 3, array(
			'type' => $type,
			'uid'  => $uid,
			'cid'  => $cid
		));

		return $result;
	}

	/**
	 * @param string $txt
	 * @return mixed
	 */
	public function GMBroadcast($txt) {
		$result = $this->exec(101, 4, array(
			'txt' => $txt
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @return mixed
	 */
	public function GMQueryCharacter($uid) {
		$result = $this->exec(101, 5, array(
			'uid' => $uid
		));

		return $result;
	}

	/**
	 * @param int $adminUID
	 * @param int $uid
	 * @param string $merid
	 * @param string $tranno
	 * @param int $amount
	 * @param float $money
	 * @param int $type
	 * @return mixed
	 */
	public function GMUserRecharge($adminUID, $uid, $merid, $tranno, $amount, $money, $type) {
		$result = $this->exec(101, 6, array(
			'adminUID' => $adminUID,
			'uid'      => $uid,
			'merid'    => $merid,
			'tranno'   => $tranno,
			'type'     => $type,
			'amount'   => $amount,
			'money'    => $money
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $type
	 * @param int $amount
	 * @return mixed
	 */
	public function GMChgUserElectrum($uid, $type, $amount) {
		$result = $this->exec(101, 7, array(
			'uid'    => $uid,
			'type'   => $type,
			'amount' => $amount
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @return mixed
	 */
	public function GMGetUserElectrum($uid) {
		$result = $this->exec(101, 8, array(
			'uid' => $uid
		));

		return $result;
	}

	/**
	 * @param int $cid
	 * @return mixed
	 */
	public function GMBanPlayerForever($cid) {
		$result = $this->exec(101, 9, array(
			'cid' => $cid
		));

		return $result;
	}

	/**
	 * @param int $cid
	 * @param int $time
	 * @return mixed
	 */
	public function GMBanPlayerPeriod($cid, $time) {
		$result = $this->exec(101, 10, array(
			'cid'  => $cid,
			'time' => $time
		));

		return $result;
	}

	/**
	 * @param int $cid
	 * @return mixed
	 */
	public function GMUnbanPlayer($cid) {
		$result = $this->exec(101, 11, array(
			'cid' => $cid
		));

		return $result;
	}

	/**
	 * @param int $cid
	 * @param int $coupon
	 * @return mixed
	 */
	public function GMGiveCoupon($cid, $coupon) {
		$result = $this->exec(101, 12, array(
			'cid'    => $cid,
			'coupon' => $coupon
		));

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function GMReloadConfig() {
		$result = $this->exec(101, 13, array());

		return $result;
	}

	/**
	 * @param int $cid
	 * @return mixed
	 */
	public function GMResumeCharacter($cid) {
		$result = $this->exec(101, 14, array(
			'cid' => $cid
		));

		return $result;
	}

	/**
	 * @param int $cid
	 * @param int $quality
	 * @param string $socketlist
	 * @param int $eid
	 * @param int $stacked
	 * @param string $randomprop
	 * @param int $isbind
	 * @param int $level
	 * @param int $smeltnum
	 * @param string $smeltprop
	 * @param int $shilling
	 * @param string $newrandprop
	 * @return mixed
	 */
	public function GMMailEquip($cid, $quality, $socketlist, $eid, $stacked, $randomprop, $isbind, $level, $smeltnum, $smeltprop, $shilling, $newrandprop) {
		$result = $this->exec(101, 15, array(
			'cid'         => $cid,
			'quality'     => $quality,
			'socketlist'  => $socketlist,
			'eid'         => $eid,
			'stacked'     => $stacked,
			'randomprop'  => $randomprop,
			'isbind'      => $isbind,
			'level'       => $level,
			'smeltnum'    => $smeltnum,
			'smeltprop'   => $smeltprop,
			'shilling'    => $shilling,
			'newrandprop' => $newrandprop
		));

		return $result;
	}

	/**
	 * @param int $event
	 * @param int $status
	 * @return mixed
	 */
	public function GMNewServerEvent($event, $status) {
		$result = $this->exec(101, 16, array(
			'event'  => $event,
			'status' => $status
		));

		return $result;
	}

	/**
	 * @param int $time
	 * @return mixed
	 */
	public function GMStartServerTime($time) {
		$result = $this->exec(101, 17, array(
			'time' => $time
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @return mixed
	 */
	public function GMQueryVipPoint($uid) {
		$result = $this->exec(101, 18, array(
			'uid' => $uid
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $value
	 * @return mixed
	 */
	public function GMChangeVipPoint($uid, $value) {
		$result = $this->exec(101, 19, array(
			'uid'   => $uid,
			'value' => $value
		));

		return $result;
	}

	/**
	 * @param int $lotteryType
	 * @param array $drawItems
	 * @param array $exchangeItems
	 * @return mixed
	 */
	public function GMSetLotteryDrawInfo($lotteryType, $drawItems, $exchangeItems) {
		$result = $this->exec(101, 23, array(
			'lotteryType'    => $lotteryType,
			'drawItems'      => $drawItems,
			'$exchangeItems' => $$exchangeItems
		));

		return $result;
	}

	/**
	 * @param int $lotteryType
	 * @return mixed
	 */
	public function GMQueryLotteryDrawInfo($lotteryType) {
		$result = $this->exec(101, 24, array(
			'lotteryType' => $lotteryType
		));

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function GMQueryAnnouncement() {
		$result = $this->exec(101, 25, array());

		return $result;
	}

	/**
	 * @param int $announcementID
	 * @return mixed
	 */
	public function GMDeleteAnnouncement($announcementID) {
		$result = $this->exec(101, 26, array(
			'announcementID' => $announcementID
		));

		return $result;
	}

	/**
	 * @param int $announcementID
	 * @param string $tagStr
	 * @param string $title
	 * @param string $content
	 * @param int $announcementType
	 * @param string $addTime
	 * @param int $sequence
	 * @param int $isRecommend
	 * @param int $isShow
	 * @param string $relevanceEvent
	 * @param string $startTime
	 * @param string $endTime
	 * @param string $closeTime
	 * @return mixed
	 */
	public function GMUpdateAnnouncement($announcementID, $tagStr, $title, $content, $announcementType, $addTime, $sequence, $isRecommend, $isShow, $relevanceEvent, $startTime,
	                                     $endTime, $closeTime) {
		$result = $this->exec(101, 27, array(
			'announcementID'   => $announcementID,
			'tagStr'           => $tagStr,
			'title'            => $title,
			'content'          => $content,
			'announcementType' => $announcementType,
			'addTime'          => $addTime,
			'sequence'         => $sequence,
			'isRecommend'      => $isRecommend,
			'isShow'           => $isShow,
			'relevanceEvent'   => $relevanceEvent,
			'startTime'        => $startTime,
			'endTime'          => $endTime,
			'closeTime'        => $closeTime
		));

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function GMQueryRewardCondition() {
		$result = $this->exec(101, 28, array());

		return $result;
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function GMDeleteRewardCondition($id) {
		$result = $this->exec(101, 29, array(
			'id' => $id
		));

		return $result;
	}

	/**
	 * @param int $id
	 * @param int $announcementType
	 * @param string $conditions
	 * @param string $conditionsExplain
	 * @param string $rewards
	 * @param string $startTime
	 * @param string $endTime
	 * @param int $isDisable
	 * @param int $maxRewardCount
	 * @return mixed
	 */
	public function GMUpdateRewardCondition($id, $announcementType, $conditions, $conditionsExplain, $rewards, $startTime, $endTime, $isDisable, $maxRewardCount) {
		$result = $this->exec(101, 30, array(
			'id'                => $id,
			'announcementType'  => $announcementType,
			'conditions'        => $conditions,
			'conditionsExplain' => $conditionsExplain,
			'rewards'           => $rewards,
			'startTime'         => $startTime,
			'endTime'           => $endTime,
			'isDisable'         => $isDisable,
			'maxRewardCount'    => $maxRewardCount
		));

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function GameParamGetParamList() {
		$result = $this->exec(102, 1, array());

		return $result;
	}

	/**
	 * @param int $exprating
	 * @return mixed
	 */
	public function GameParamSetExpRating($exprating) {
		$result = $this->exec(102, 2, array(
			'exprating' => $exprating
		));

		return $result;
	}

	/**
	 * @param int $isServerOpen
	 * @return mixed
	 */
	public function GameParamSetIsServerOpen($isServerOpen) {
		$result = $this->exec(102, 3, array(
			'isServerOpen' => $isServerOpen
		));

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function ServerStatusGetOnlineCount() {
		$result = $this->exec(103, 1, array());

		return $result;
	}

	/**
	 * @param int $uid
	 * @return mixed
	 */
	public function ServerStatusGetUserCharacterCount($uid) {
		$result = $this->exec(103, 2, array(
			'uid' => $uid
		));

		return $result;
	}

	/**
	 * @param int $level
	 * @return mixed
	 */
	public function ServerStatusGetAllCharacterCount($level) {
		$result = $this->exec(103, 3, array(
			'level' => $level
		));

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function ServerStatusGetServerOpenState() {
		$result = $this->exec(103, 4, array());

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $giftid
	 * @param string $server
	 * @param int $len
	 * @param int $count
	 * @param int $time
	 * @return mixed
	 */
	public function ActiveCodeServerMake($uid, $giftid, $server, $len, $count, $time) {
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

	/**
	 * @param int $uid
	 * @param int $gifttype
	 * @return mixed
	 */
	public function ActiveCodeQuery($uid, $gifttype) {
		$result = $this->exec(104, 2, array(
			'uid'      => $uid,
			'gifttype' => $gifttype
		));

		return $result;
	}

	/**
	 * @param int $uid
	 * @param int $giftid
	 * @param stirng $server
	 * @param int $len
	 * @param int $count
	 * @param int $time
	 * @param int $limit
	 * @return mixed
	 */
	public function ActiveCodeServerMakeLimitCount($uid, $giftid, $server, $len, $count, $time, $limit) {
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

	public function __construct($name, $cfg) {
		parent::__construct($name, $cfg);
	}
}

