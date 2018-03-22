<?php

namespace controller;
use model\UserModel;
use framework\Upload;
class UpdateController extends Controller
{
	public $user;
	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
	}
	function about()
	{
		
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$birthday = $u[0]['birthday'];
			$place = $u[0]['place'];
			$position = $u[0]['realname'];


			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
			$this->assign('birthday',$birthday);
			$this->assign('place',$place);
			$this->assign('position',$position);
		}

		$this->display();
	}

	function update()
	{
		
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$place = $u[0]['place'];
			$birthday = $u[0]['birthday'];
			$position = $u[0]['realname'];
			
			$bd = date('Y-m-d',$birthday);
			$arr = explode('-', $bd);
			$year = $arr[0];
			$month = $arr[1];
			$day = $arr[2];
			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
			$this->assign('year',$year);
			$this->assign('month',$month);
			$this->assign('day',$day);
			$this->assign('place',$place);
			$this->assign('birthday',$birthday);
			$this->assign('position',$position);
		}



		$this->display();
	}

	function doUpdate()
	{
		
		// var_dump($_POST);die;
		//传进来的名字
		if (!empty($_POST['username'])) {
			$username = $_POST['username'];
		} else {
			$username = '吴亦凡';
		}

		//传进来的生日
		//年份
		if (!empty($_POST['nian'])) {
			$year = $_POST['nian'];
		} else {
			$year = 1990;
		}

		//月份
		if (!empty($_POST['yue'])) {
			$month = $_POST['yue'];
		} else {
			$month = 1;
		}

		//天数
		if (!empty($_POST['ri'])) {
			$day = $_POST['ri'];
		} else {
			$day = 1;
		}

		$birthday = $year .'-'. $month .'-'. $day;
		$birthday = strtotime($birthday);

		//传过来的place
		if (!empty($_POST['place'])) {
			$place = $_POST['place'];
		} else {
			$place = '';
		}

		//传过来的职位
		if (!empty($_POST['position'])) {
			$position = $_POST['position'];
		} else {
			$position = '天上的';
		}

		//上传头像
		$upload = new Upload();

		// $hid_name = $_POST['hid_name'];
		$a = $upload->uploadFile('photo');
		if($a[1])
		{
			$data['picture'] = $a[0];
		}else{
			$data['picture'] = 'public/images/photos.jpg';
		}
		$hid_name = $_POST['hid_name'];
		$data['username'] = $username;
		$data['birthday'] = $birthday;
		$data['place'] = $place;
		$data['realname'] = $position;

		if (empty($data)) {
			$this->notice('内容为空不能修改1');
			exit;
		}

		$_SESSION['username'] = $username;
		$update = $this->user->upd($data, $hid_name);
		
		if ($update) {
			 
			$this->notice('个人资料修改成功！');
			exit;
		} else {
			
			$this->notice('个人资料修改失败');
			exit;
		}
		
	}
}