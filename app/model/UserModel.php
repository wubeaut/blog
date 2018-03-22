<?php

namespace model;
use framework\Model;
class UserModel extends Model
{
	//查询在注册得时候是否已经存在

	public function zc($username)
	{
		$res = $this->where("username = '$username'")->select();

		return $res;
	}

	//执行注册
	function addUser($data)
	{
		
		return $this->insert($data);
	}	


	//执行登陆查询	
	public function doFind($data)
	{

		$username = $data['username'];

		$password = $data['password'];

		$result = $this->where("username = '$username' && password = '$password'")->select();

		return $result;
	}

	//个人资料修改

	public function upd($data , $username)
	{	
		$upd = $this->where("username='$username'")->update($data);

		return $upd;
	}

	


	function addWord()
	{
		return $this->select();
	}


	function total($where=null)
	{
		return $this->table('bg_user')->where($where)->count('uid');
	}



	//判断后台
	function doadmin($username , $password , $udertype)
	{
		$logina = $this->where("username='$username' && password='$password' && udertype=$udertype");

		return $logina;
	}


}

