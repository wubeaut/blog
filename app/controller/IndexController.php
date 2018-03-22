<?php

namespace controller;
// use model\CategoryModel;
use model\DetailsModel;
use model\UserModel;
class IndexController extends Controller
{
	public $details;
	public $user;

	function __construct()
	{
		parent::__construct();
		$this->details = new DetailsModel();
		$this->user = new UserModel();
	}

	function index()
	{
		
		
		
		//判断是否登录
		if (!empty($_SESSION['username'])) {
			$username = $_SESSION['username'];
			$u = $this->user->getByUsername($username);
			$udertype = $u[0]['udertype'];
			$pic = $u[0]['picture'];
			$this->assign('pic',$pic);
			$this->assign('username',$username);
			$this->assign('udertype',$udertype);
		}
		//帖子展示
		
	    $message = $this->details->field('id,title,content,addtime,picture')->table('bg_details')->where('isdel=0')->order('addtime desc')->limit('0,4')->select();
	    
	   	//最新发表
	   	$article = $this->details->field('title,id')->table('bg_details')->where('isdel=0')->order('id desc')->limit('0,10')->select();
	  	

	  	//点击排行
	  	$hits = $this->details->field('title,id')->table('bg_details')->where('isdel=0')->order('hits desc')->limit('0,5')->select();


	  	$this->assign('hits', $hits);
	  	$this->assign('article',$article);
	    $this->assign('message',$message);
		//什么都用写，代表显示app/view/index(控制器)/index(方法名字).html
		$this->display();
	}

	
}
