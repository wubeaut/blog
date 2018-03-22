<?php

class Start
{
	//用来保存自动加载的对象
	static public $auto;
	static function init()
	{
		self::$auto = new Psr4AutoLoad(); 
	}
	static function route()
	{
		//
		$m = empty($_GET['m'])? 'index' :$_GET['m'];
		$a = empty($_GET['a'])? 'index' :$_GET['a'];
		$_GET['m'] = $m;
		$_GET['a'] = $a;
		$className = 'controller\\'. ucfirst(strtolower($m)) . 'Controller';
		$obj = new $className();
		call_user_func([$obj, $a]);
	}
}	
Start::init();