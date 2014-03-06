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
	 * Check user credential
	 * $result->uid = -1 - wrong username
	 * $result->uid = -2 - wrong password
	 * normal:
	 * object(stdClass)#22 (12) {
	 * ["uid"]=>
	 * int(80235546)
	 * ["nickname"]=>
	 * string(16) "西里尔雕塑家"
	 * ["firstname"]=>
	 * string(0) ""
	 * ["lastname"]=>
	 * string(0) ""
	 * ["telephone"]=>
	 * string(0) ""
	 * ["emailverified"]=>
	 * int(0)
	 * ["subscribenews"]=>
	 * int(0)
	 * ["regip"]=>
	 * string(12) "192.168.0.90"
	 * ["token"]=>
	 * string(32) "xdznjv1hlqczvhh690d09j7x4fgrnv7r"
	 * ["expiretimestamp"]=>
	 * int(1393958926)
	 * ["createTime"]=>
	 * string(10) "1393871340"
	 * ["updateTime"]=>
	 * string(10) "1393871340"
	 * }
	 *
	 * @param $username
	 * @param $userpwd
	 * @param $fromip
	 *
	 * @return \stdClass
	 */
	public function UserCheck($username, $userpwd, $fromip) {
		$result = $this->exec(1, 1, array(
			'username' => $username,
			'userpwd'  => $userpwd,
			'fromip'   => $fromip
		));

		return $result;
	}

	/// Platform API

	public function RegUser($username, $userpwd, $nickname, $subscribenews, $adfrom, $regip) {
		$result = $this->exec(1, 2, array(
			'username'      => $username,
			'userpwd'       => $userpwd,
			'nickname'      => $nickname,
			'subscribenews' => $subscribenews,
			'adfrom'        => $adfrom,
			'regip'         => $regip
		));

		return $result;
	}

	public function UserPasswordModify($uid, $useroldpwd, $usernewpwd, $token, $fromip) {
		$result = $this->exec(1, 3, array(
			'uid'        => $uid,
			'olduserpwd' => $useroldpwd,
			'newuserpwd' => $usernewpwd,
			'token'      => $token,
			'fromip'     => $fromip
		));

		return $result;
	}

	public function AdminResetUserPassword($adminuid, $targetuid, $newuserpwd) {
		$result = $this->exec(1, 4, array(
			'adminuid'   => $adminuid,
			'targetuid'  => $targetuid,
			'newuserpwd' => $newuserpwd
		));

		return $result;
	}

	public function AdminResetUserNickname($adminuid, $targetuid, $newnickname) {
		$result = $this->exec(1, 5, array(
			'adminuid'    => $adminuid,
			'targetuid'   => $targetuid,
			'newnickname' => $newnickname
		));

		return $result;
	}

	public function ModifyUserInfo($uid, $token, $fromip, $modifyitem = array()) {
		$result = $this->exec(1, 6, array(
			'uid'        => $uid,
			'token'      => $token,
			'fromip'     => $fromip,
			'modifyitem' => $modifyitem
		));

		return $result;
	}

	public function GetUserRole($uid, $gameid, $token) {
		$result = $this->exec(1, 7, array(
			'uid'    => $uid,
			'gameid' => $gameid,
			'token'  => $token
		));

		return $result;
	}

	public function AdminModifyUserRole($adminuid, $targetuid, $gameid, $roletype) {
		$result = $this->exec(1, 8, array(
			'adminuid'  => $adminuid,
			'targetuid' => $targetuid,
			'gameid'    => $gameid,
			'roletype'  => $roletype
		));

		return $result;
	}

	public function PlatformLogin($type, $userinfo = array()) {
		$result = $this->exec(1, 9, array(
			'type'     => $type,
			'userinfo' => $userinfo
		));

		return $result;
	}

	public function PlatformCurrencySwap($type, $currencyswap = array()) {
		$result = $this->exec(1, 10, array(
			'type'         => $type,
			'currencyswap' => $currencyswap
		));

		return $result;
	}

	public function AdminModifyUserStatus($adminuid, $targetuid, $newaccountstatus) {
		$result = $this->exec(1, 11, array(
			'adminuid'         => $adminuid,
			'targetuid'        => $targetuid,
			'newaccountstatus' => $newaccountstatus
		));

		return $result;
	}

	public function CheckToken($uid, $token) {
		$result = $this->exec(1, 12, array(
			'uid'   => $uid,
			'token' => $token
		));

		return $result;
	}

	public function ByTokenGetAuthcode($uid, $token, $uniqidrand) {
		$result = $this->exec(1, 13, array(
			'uid'          => $uid,
			'token'        => $token,
			'webuniquekey' => $uniqidrand
		));

		return $result;
	}

	public function AdminResetUsernamePassword($adminuid, $targetusername, $newuserpwd) {
		$result = $this->exec(1, 14, array(
			'adminuid'       => $adminuid,
			'targetusername' => $targetusername,
			'newuserpwd'     => $newuserpwd
		));

		return $result;
	}

	public function AddPlayerVipTimeByUID($adminuid, $targetuid, $gameid, $addviptime) {
		$result = $this->exec(1, 15, array(
			'adminuid'   => $adminuid,
			'targetuid'  => $targetuid,
			'gameid'     => $gameid,
			'addviptime' => $addviptime
		));

		return $result;
	}

	public function AddPlayerVipTimeByUserName($adminuid, $targetusername, $gameid, $addviptime) {
		$result = $this->exec(1, 16, array(
			'adminuid'       => $adminuid,
			'targetusername' => $targetusername,
			'gameid'         => $gameid,
			'addviptime'     => $addviptime
		));

		return $result;
	}

	public function AccountLogout($uid, $token, $fromip) {
		$result = $this->exec(1, 17, array(
			'uid'   => $uid,
			'token' => $token,
			'fromip' => $fromip
		));

		return $result;
	}

	public function TransPlatformUid($type, $userinfo = array()) {
		$result = $this->exec(1, 18, array(
			'type'     => $type,
			'userinfo' => $userinfo
		));

		return $result;
	}

	public function ElectrumBalance($uid, $gameid, $token) {
		$result = $this->exec(1, 19, array(
			'uid'    => $uid,
			'gameid' => $gameid,
			'token'  => $token
		));

		return $result;
	}

	public function ElectrumAdd($uid, $gameid, $token, $amount, $orderid, $money, $ordertype) {
		$result = $this->exec(2, 2, array(
			'uid'       => $uid,
			'gameid'    => $gameid,
			'token'     => $token,
			'amount'    => $amount,
			'orderid'   => $orderid,
			'money'     => $money,
			'ordertype' => $ordertype
		));

		return $result;
	}

	public function ElectrumReduce($uid, $gameid, $token, $amount, $orderid, $money, $ordertype) {
		$result = $this->exec(2, 3, array(
			'uid'       => $uid,
			'gameid'    => $gameid,
			'token'     => $token,
			'amount'    => $amount,
			'orderid'   => $orderid,
			'money'     => $money,
			'ordertype' => $ordertype
		));

		return $result;
	}

	public function ElectrumReset($gameid) {
		$result = $this->exec(2, 4, array(
			'gameid' => $gameid
		));

		return $result;
	}

	public function AdminElectrumAdd($uid, $gameid, $adminuid, $amount, $orderid, $money, $ordertype) {
		$result = $this->exec(2, 5, array(
			'uid'       => $uid,
			'gameid'    => $gameid,
			'adminuid'  => $adminuid,
			'amount'    => $amount,
			'orderid'   => $orderid,
			'money'     => $money,
			'ordertype' => $ordertype
		));

		return $result;
	}

	public function AdminElectrumReduce($uid, $gameid, $adminuid, $amount, $orderid, $money, $ordertype) {
		$result = $this->exec(2, 6, array(
			'uid'       => $uid,
			'gameid'    => $gameid,
			'adminuid'  => $adminuid,
			'amount'    => $amount,
			'orderid'   => $orderid,
			'money'     => $money,
			'ordertype' => $ordertype
		));

		return $result;
	}

	public function PerkGetAll($uid, $gameid, $token) {
		$result = $this->exec(3, 1, array(
			'uid'    => $uid,
			'gameid' => $gameid,
			'token'  => $token
		));

		return $result;
	}

	public function PerkUnlock($uid, $gameid, $token, $perkidlist = array()) {
		$result = $this->exec(3, 2, array(
			'uid'        => $uid,
			'gameid'     => $gameid,
			'token'      => $token,
			'perkidlist' => $perkidlist
		));

		return $result;
	}

	public function AdminPerkUnlock($uid, $gameid, $adminuid, $perkidlist = array()) {
		$result = $this->exec(3, 3, array(
			'uid'        => $uid,
			'gameid'     => $gameid,
			'adminuid'   => $adminuid,
			'perkidlist' => $perkidlist
		));

		return $result;
	}

	public function CreateTimePeriodGiftID($serial, $gameid, $giftid, $usecount, $enabletime, $count, $len) {
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

	public function CreateSpecifyGiftID($serial, $giftcode, $gameid, $giftid, $usecount, $enabletime) {
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

	public function CheckGiftIDStatus($serial, $giftcode) {
		$result = $this->exec(5, 2, array(
			'serial'   => $serial,
			'giftcode' => $giftcode
		));

		return $result;
	}

	public function UseGiftIDStatus($serial, $uid, $giftcode) {
		$result = $this->exec(5, 3, array(
			'serial'   => $serial,
			'uid'      => $uid,
			'giftcode' => $giftcode
		));

		return $result;
	}

	public function CreateSpecifyGiftcode($serial, $gameid, $giftid, $usecount, $enabletime, $len) {
		$result = $this->exec(5, 3, array(
			'serial'     => $serial,
			'gameid'     => $gameid,
			'giftid'     => $giftid,
			'usecount'   => $usecount,
			'enabletime' => $enabletime,
			'len'        => $len
		));

		return $result;
	}

	public function __construct($name, $cfg, $storage) {
		parent::__construct($name, $cfg, $storage);
	}
}

