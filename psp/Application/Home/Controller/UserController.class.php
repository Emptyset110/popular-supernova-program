<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

	public function index() {
		
	}

	public function login(){
		$result['errCode'] = 0;
		$result['errInfo'] = 'No Error';
		
		if(IS_POST) {
			$loginInfo = I('post.');
			
			if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$loginInfo['email'])) {
				
				if($userInfo = D('User') -> login($loginInfo)) { //若成功登陆则记录session
				
					session('uid', $userInfo['id']); //设置session
					
				} else{
					//登陆失败
					$result['errCode'] = 1;
					$result['errInfo'] = 'Login Failed';
				}
				
			} else {
				$result['errCode'] = 2;
				$result['errInfo'] = 'Email is invalid';
			}
		}	else {
			//没检测到post数据，非法操作
			$result['errCode'] = -1;
			$result['errInfo'] = 'No Post Data Received!';
		}
		
		$result = json_encode($result);
		echo $result;
	}

}