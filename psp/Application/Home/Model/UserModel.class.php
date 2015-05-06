<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	/*
	* login方法验证用户名密码
	* 验证成功则返回用户信息，同时记录ip地址，登陆时间；否则返回false
	*/
	public function login($loginInfo){
		$loginInfo['pwd'] = SHA1($loginInfo['pwd']);
		$userInfo = $this -> where("email='{$loginInfo['email']}' AND pwd='{$loginInfo['pwd']}'")->find();
		$userInfo['errCode'] = 0;
		$userInfo['errInfo'] = 'No Error';
 		if (count($userInfo)>0) {
			$this -> lastloginip = $_SERVER["REMOTE_ADDR"];
			$this -> lastlogintime = time();
			$this -> where("id={$userInfo['id']}") -> save();
		} else {
			$userInfo['errCode'] = 3;
			$userInfo['errInfo'] = 'password mismatch';
			return false;
		} 
		return $userInfo;
	}
	
	/*
	* register方法用户添加用户信息
	*/
	public function register($regInfo){
		$regResult['errCode'] = 0;
		$regResult['id'] = 0;
		
		$user = $this->where("email='{$regInfo['email']}'")->find();
		
		if (count($user) > 0) {
			$regResult['errCode'] = 1; //用户已经存在
			return $regResult;
		} else{
			$regInfo['registerIP'] = $_SERVER['REMOTE_ADDR'];
			$regInfo['registerTime'] = time();
			
			$regResult['id'] = $this -> add($regInfo);
			
			if ($regResult['id'] > 0) {
				$regResult['utype'] = $regInfo['utype'];
				return $regResult;
			} else{
				$regResult['errCode'] = 2; //用户不存在，但是插入数据库失败
				return $regResult;
			}
		}
	}
}

?>