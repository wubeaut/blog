<?php

namespace controller;
use framework\Code;
use framework\Page;
use model\UserModel;
use model\WordModel;
class UserController extends Controller
{
	//使用一个变量，用来承接model类的对象
	public $user;
	public $word;
	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
		$this->word = new WordModel();
	}

	//注册
	function register()
	{
		$this->display();
	}

	function doRegister()
	{

		//判断用户名
		if (!empty($_POST['username'])) {
			
			if (strlen($_POST['username'])< 2 || strlen($_POST['username'])>12) {
				$this->notice('用户名不符合规范');
				exit;
			}
		} else {
			$this->notice('用户名不能为空');
			exit;
		}


		//判断用户名是否存在
		$username = $_POST['username'];
		$res = $this->user->zc($username);
		if (!empty($res)) {
			$this->notice('该用户已存在！');
			exit;
		}


		//判断密码
		
		if (!empty($_POST['pwd'])) {
			
			if (!$this->checkPwd($_POST['pwd'])){

				$this->notice('密码不符合规范');
				exit;
			}
		} else {
			$this->notice('密码不能为空');
			exit;
		}

		//判断俩次密码是否一致
		if (!empty($_POST['repwd'])) {
			
			if ($this->checkPwd($_POST['repwd'])){
				if (strcmp($_POST['pwd'], $_POST['repwd'])) {
					$this->notice('两次密码不一样');
					exit;
				} 
				
			} else {
				$this->notice('确认密码不符合规范');
				exit;	
			}
		} else {
			$this->notice('确认密码不能为空');
			exit;
		}

		
		//判断邮箱是否正确
		if (!empty($_POST['email'])) {
			if (!$this->checkEmail($_POST['email'])) {
				$this->notice('邮箱不符合规范！');
				exit;
			}
		} else {
			$this->notice('邮箱不能为空！');
			exit;
		}

		//判断验证码
		if (!empty($_POST['yzm'])) {
			if (strcmp(strtolower($_SESSION['code']),strtolower($_POST['yzm']))) {
				$this->notice('验证码输入有误！');
				exit;
			}
		} else {
			$this->notice('请填写验证码！');
		}
		
		//短信判断
		if (strcmp($_POST['code'], $_SESSION['code1'])) {
			$this->notice('短信获取失败！');
			exit;
		}
		
		
		

		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['pwd']);
		$data['email'] = $_POST['email'];
		$data['udertype'] = 0;
		$time = time();
		$t = $time + 10;
		$data['regtime'] = $time;
		$data['lasttime'] = $t;

		
		if($this->user->addUser($data)) {
			$_SESSION['username'] = $_POST['username'];
			$this->notice('注册成功', 'index.php');
			exit;
		} else {
			$this->notice('注册失败');
			exit;
		}
	}


	//登录
	function login()
	{
		$this->display();
	}

	function doLogin()
	{
		//判断用户名
		if (!empty($_POST['username'])) {
			
			if (strlen($_POST['username'])< 2 || strlen($_POST['username'])>12) {
				$this->notice('用户名不符合规范');
				exit;
			} 
		} else {
			$this->notice('用户名不能为空');
			exit;
		}

		//判断密码
		
		if (!empty($_POST['pwd'])) {
			
			if (!$this->checkPwd($_POST['pwd'])){

				$this->notice('密码不符合规范');
				exit;
			}
		} else {
			$this->notice('密码不能为空');
			exit;
		}

		//从数据库查出来已经注册的用户姓名和密码是否一致
		$name = $_POST['username'];
		$pwd = md5($_POST['pwd']);

		$data['username'] = $name;
		$data['password'] = $pwd;

		$result = $this->user->doFind($data);

		if ($result) {

			if (1 == $result[0]['allowlogin']) {
				$this->notice('您已被禁止登录');
				exit;
			}

			$_SESSION['username'] = $data['username'];
			$this->notice('登录成功！','index.php');
			exit;
		} else {
			$this->notice('登录失败！你还没有注册','index.php?m=user&a=register');
			exit;
		}
	}	
		
	//验证码
	function verify()
	{
		$code = new Code();
		$code->outImage();
		//保存验证码
		$_SESSION['code'] = $code->code;
	}

	//检测密码
	function checkPwd($pwd)
	{
		$pattern = "/^\d{6,}/";
		$pattern1 = "/^\w{6,}/";
		if (preg_match($pattern1, $pwd)) {
			if (preg_match($pattern, $pwd)) {
				return false;
			}
			return true;
		}
		return false;
	}

	//检测邮箱
	function checkEmail($email)
	{
		$pattern = "/^\w+@(\w+\.)+\w+$/";
		if (preg_match($pattern,$email,$match)) {
			return true;
		} else {
			return false;
		}
	}

	
	//退出
	function logout()
	{

		unset($_SESSION['username']);
		$_COOKIE = [];
		session_destroy();
		$this->notice('退出成功！','index.php');
		exit;
	}


	//留言板
	function word()
	{
	
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
		}

		
		
		$total = $this->word->total('isdel=0');
		$page1 = new Page('3',$total);
		$allPage = $page1->allPage();
		$limit = $page1->limit();
		$word = $this->word->zsWord('isdel=0',$limit);
		$this->assign('total',$total);
		$this->assign('allPage',$allPage);
		$this->assign('word',$word);
		$this->display();
	}

	function doWord()
	{
		
		if (!empty($_POST['content'])) {
			$content = $_POST['content'];
		} else {
			$content = '欢迎浏览我的博客';
		}

		$username = $_POST['hid_username'];
		
		$u = $this->user->getByUsername($username);
		$uid = $u[0]['uid'];
		

		$data['authorid'] = $uid;
		$data['content'] = $content;
		$data['addtime'] = time();
		
		
		if ($this->word->addWord($data)) {
			$this->notice('留言成功！');
			exit;
		} else {
			$this->notice('留言失败！');
			exit;
		}
	}
}

