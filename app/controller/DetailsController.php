<?php
namespace controller;
use framework\Page;
use model\UserModel;
use model\DetailsModel;
use model\ReplyModel;
use framework\Upload;
class DetailsController extends Controller
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

	function list()
	{
		
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
		}
		//帖子展示
		
		$total = $this->details->total('isdel=0');
		$page = new Page('3',$total);
		$allPage = $page->allPage();
		$limit = $page->limit();
	    $message = $this->details->zsList('isdel=0',$limit);
	  
	   	//最新发表
	   	$article = $this->details->field('title,id')->table('bg_details')->where('isdel=0')->order('id desc')->limit('0,10')->select();
	  	

	  	//点击排行
	  	$hits = $this->details->field('title,id')->table('bg_details')->where('isdel=0')->order('hits desc')->limit('0,5')->select();

	  	$this->assign('total',$total);
		$this->assign('allPage',$allPage);
	  	$this->assign('hits', $hits);
	  	$this->assign('article',$article);
	    $this->assign('message',$message);
		$this->display();
	}

	function reply()
	{
		
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
		} else {
			$this->notice('请登录后查看','index.php?m=user&a=login');
			exit;
		}

		
		

		//帖子展示
		$id = $_GET['id'];
	    $message1 = $this->details->field('*')->table('bg_details')->where("isdel=0 && id=$id")->select();
	    $message = $message1[0];

	    //帖子回复
	   
	   
	    $total = $this->reply->total("isdel=0 && tid=$id");
		$page = new Page('3',$total);
		$allPage = $page->allPage();
		$limit = $page->limit();
	    $replyQes = $this->reply->zsList("isdel=0 && tid=$id",$limit);

	    $this->assign('total',$total);
		$this->assign('allPage',$allPage);
	    $this->assign('id',$id);
	    $this->assign('replyQes',$replyQes);
	    $this->assign('message',$message);
		$this->display();
	}

	function doReply()
	{
		
		$id = $_POST['hid_id'];

		//回复内容
		if (!empty($_POST['content'])) {
			$content = $_POST['content'];
		} else {
			$this->notice('回复内容不能为空');
			exit;
		}

		
		$data['tid'] = $id;
		$data['content'] = $content;
		$data['addtime'] = time();
		$data['istop'] = 0;
		$data['elite'] = 0;
		if ($this->reply->addReply($data)) {
			$this->notice('回复发表成功！');
			exit;
		} else {

			$this->notice('回复发表失败！');
			exit;
		}
	}



	//发表博文
	function send()
	{
		
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
		}
		$this->display();
	}


	function doSend()
	{
		
		if (!empty($_POST['title'])) {
			$title = $_POST['title'];
		} else {
			$this->notice('博文标题不能为空!');
			exit;
		}


		if (!empty($_POST['content'])) {
			$content = $_POST['content'];
		} else {
			$this->notice('博文内容不能为空！');
			exit;
		}

		//上传头像
		$upload = new Upload();

		// $hid_name = $_POST['hid_name'];
		$a = $upload->uploadFile('file');
		if($a[1])
		{
			$data['picture'] = $a[0];
		}else{
			$data['picture'] = 'public/images/photos.jpg';
		}

		$username = $_POST['hid_username'];
		$data['title'] = $title;
		$data['content'] = $content;
		$data['addtime'] = time();

		
		if ($this->details->addft($data)) {
			
			$this->notice('发表博文成功！','index.php?m=details&a=list');
			exit;
		} else {
			
			$this->notice('发表博文失败！');
			exit;
		}

		$this->assign('username',$username);
	}



	//模糊查询
	function find()
	{

		if (empty($_POST['search'])) {
			$this->notice('你查找的的内容不存在');
			exit;
		}

		$name = $_POST['search'];
		$mu = $this->details->muhu($name);
		
		if ($mu) {
			$this->notice('查询成功',"index.php?m=search&a=cha&name=$name");
			exit;
		} else {
			$this->notice('查询失败');
			exit;
		}
		
	}
}