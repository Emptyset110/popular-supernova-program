<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function loginSession() {
	/*
	* 判断是否已经登陆。如果登陆则返回uid与uType
	*/
	$result['errCode'] = 0;
	$result['errInfo'] = '';
	
	if (IS_POST){
		if (session('?uid')) {
			$result['uid'] = session('uid');
		}	else {
			$result['uid'] = 0;
		}
	}	else{
		//Post data aren't received
		$result['errCode'] = 1;
		$result['errInfo'] = 'Post Data Not Received';
	}
		
		//Return result
		$result = json_encode($result);
		echo $result;
	}
}