<?php
namespace controller;
use model\UserModel;
use model\DetailsModel;
use model\ReplyModel;
use model\WordModel;
use framework\Page;

class AdarticleController extends Controller
{

	public $user;
	public $details;
	public $reply;
	public $word;

	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
		$this->details = new DetailsModel();
		$this->reply = new ReplyModel();
		$this->word = new WordModel();
	}

	//博文

	function mood()
	{

		$total = $this->details->total('isdel=0');
		$page = new Page('5',$total);
		$allPage = $page->allPage();
		$limit = $page->limit();

		$data= $this->details->zsList('isdel=0',$limit);
		$this->assign('data', $data);
		$this->assign('allPage',$allPage);
		$this->assign('total',$total);
		$this->display();
	}

	

	//单选删除
	function doDelete()
	{
		$id=$_GET['id'];

		$data['isdel'] = 1;
		if ($this->details->up("id = '$id'",$data)) {
			$this->notice('删除成功');
			exit;
			
		} else {
			
			$this->notice('删除失败');
			exit;
		}	
		
	}
	//多选删除
	function doDeletea()
	{
		if (empty($_POST['check'])) {
			$this->notice('请选择你的内容！');
			exit;
		}
		$data = $_POST['check'];
		$lid = join(',',$data);
		
		$date['isdel'] = 1;
		if ($this->details->up("id in ($lid)",$date)) {
			$this->notice('删除成功');
			exit;
		} else {
			$this->notice('删除失败');
			exit;
		}	
		
	}

	//评论
	function comm()
	{
		$total = $this->reply->total('isdel=0');
		$page = new Page('5',$total);
		$allPage = $page->allPage();
		$limit = $page->limit();
		$data= $this->reply->zsList('isdel=0',$limit);


		$this->assign('allPage',$allPage);
		$this->assign('total',$total);
		$this->assign('data', $data);
		$this->display();
	}


	//单选删除
	function doDeleterp()
	{
		$rid=$_GET['rid'];
		$data['isdel'] = 1;
		if ($this->reply->up("rid = '$rid'",$data)) {
			$this->notice('删除成功');
			exit;
			
		} else {
			
			$this->notice('删除失败');
			exit;
		}	
		
	}
	//多选删除
	function doDeleteab()
	{
		if (empty($_POST['check'])) {
			$this->notice('请选择你的内容！');
			exit;
		}
		$data = $_POST['check'];
		$lid = join(',',$data);
		
		$date['isdel'] = 1;
		if ($this->reply->up("rid in ($lid)",$date)) {
			$this->notice('删除成功');
			exit;
		} else {
			$this->notice('删除失败');
			exit;
		}	
		
	}


	//留言
	function word()
	{

		$total = $this->word->total('isdel=0');
		$page = new Page('5',$total);
		$allPage = $page->allPage();
		$limit = $page->limit();
		$data= $this->word->zsWord('isdel=0',$limit);
		$this->assign('allPage',$allPage);
		$this->assign('total',$total);
		$this->assign('data', $data);
		$this->display();
	}


	//单选删除
	function doDeletew()
	{
		$wid=$_GET['wid'];
		
		$data['isdel'] = 1;
		if ($this->word->up("wid = '$wid'",$data)) {
			$this->notice('删除成功');
			exit;
			
		} else {
			
			$this->notice('删除失败');
			exit;
		}	
		
	}
	//多选删除
	function doDeleteabc()
	{
		if (empty($_POST['check'])) {
			$this->notice('请选择你的内容！');
			exit;
		}
		$data = $_POST['check'];
		$lid = join(',',$data);
		
		$date['isdel'] = 1;
		if ($this->word->up("wid in ($lid)",$date)) {
			$this->notice('删除成功');
			exit;
		} else {
			$this->notice('删除失败');
			exit;
		}	
		
	}

}