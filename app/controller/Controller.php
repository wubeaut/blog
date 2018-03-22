<?php
namespace controller;
use framework\Tpl;
class Controller extends Tpl 
{
	function __construct()
	{
		$config = $GLOBALS['config'];
		parent::__construct($config['TPL_VIEW'],$config['TPL_CACHE']);

	}
	function display($viewName = null, $isInclude = true, $uri = null)
	{
		if (empty($viewName)) {
			$viewName = $_GET['m'] .'/' . $_GET['a'] . '.html';
		}
		parent::display($viewName, $isInclude, $uri);
	}
	function notice($msg, $url = null, $sec = 3)
	{
		if (empty($url)) {
			$url = $_SERVER['HTTP_REFERER'];
		}
		$this->assign('msg', $msg);
		$this->assign('url', $url);
		$this->assign('sec', $sec);
		$this->display('notice.html');
	}
}