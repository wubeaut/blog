<?php
namespace controller;
use model\UserModel;
use model\DetailsModel;
use model\ReplyModel;

class AdminController extends Controller
{

	public $user;
	public $details;
	public $reply;

	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
		$this->details = new DetailsModel();
		$this->reply = new ReplyModel();
	}

	//登录
	function login()
	{
		$this->display();
	}


	function doLogin()
	{

		
		//判断账号
		if (empty($_POST['username'])) {
			// $this->notice('请输入账号');
			exit;
		}

		//判断密码
		if (empty($_POST['password'])) {
			$this->notice('请输入密码');
			exit;
		}

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$udertype = 1;

		$result = $this->user->doadmin($username , $password , $udertype)->select();

		if ($result) {
			
			$this->notice('登录成功！','index.php?m=admin&a=show');
			exit;
		} else {
			$this->notice('登录失败!');
			exit;
		}

	}

	//退出
	function logout()
	{
			unset($_SESSION['username']);
			$_COOKIE = [];
			session_destroy();

			if (empty($_SESSION['username'])) {
				$this->notice('退出成功！','index.php?m=admin&a=login');
				exit;
			} else {
				$this->notice('退出失败！');
				exit;
			}
			
	}



    function show()
    {
    	$total = $this->details->total('isdel=0');
    	$totalReply = $this->reply->total('isdel=0');

    	$visit = $this->user->total('allowlogin=0');
    	if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$lasttime = $u[0]['lasttime'];
			$ip = $u[0]['regip'];

			$tn = $this->user->total('udertype=1');
			$this->assign('lasttime',$lasttime);
			$this->assign('username',$username);
   			$this->assign('ip',$ip);
   			$this->assign('tn',$tn);
		}
    	$this->assign('total',$total);
    	$this->assign('totalReply',$totalReply);
    	$this->assign('visit',$visit);
    	$this->display();
    }




    function user()
    {

    	
		$data = $this->user->select();
		$this->assign('data', $data);
		//什么都用写，代表显示app/view/index(控制器)/index(方法名字).html
		$this->display();
    	
    }

    function doDetele()
	{
		$id=$_GET['uid'];
		
		if ($this->user->where("uid='$id'")->delete()) {
			$this->notice('删除成功');
			exit;
		} else {
			$this->notice('删除失败');
			exit;
		}	
		
	}

	function doInserta()
	{
		$id=$_GET['uid'];
		if($_GET['allowlogin']==0){
			$data['allowlogin']=1;
		}else{
			$data['allowlogin']=0;
		}

		
		if ($this->user->table('bg_user')->where("uid='$id'")->update($data)) {
			$this->notice('修改成功');
			exit;
			
		} else {
			$this->notice('修改失败');
			exit;
		}	
	}

}