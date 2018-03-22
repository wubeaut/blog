<?php

class Psr4AutoLoad
{
	//搞一个数组，用来存放命名空间和真实路径的数组
	//这个数组的键就是命名空间，值就是真实路径
	public $maps = [];
	function __construct()
	{
		spl_autoload_register([$this, 'autoload']);
	}
	function autoload($className)
	{
		//$className = 'controller\IndexController';
		//现在我想controller    和  类名
		$pos = strrpos($className,  '\\');
		$namespace = substr($className, 0 , $pos);
		$realClass = substr($className, $pos+1);
		//咱们可以通过controller  来找类名的真正的路径，存在$maps
		$this->mapLoad($namespace, $realClass);

	}
	protected function mapLoad($namespace, $realClass)
	{
		if (array_key_exists($namespace, $this->maps)) {
			//获取真是的路径$maps = ['controller' => 'app/controller'];
			//app/controller
			$namespace = $this->maps[$namespace];
			//处理路径
			$namespace = rtrim(str_replace('\\/', '/', $namespace), '/'). '/';
			//文件的全路径
			//$namesapce = 'app/controller/';
			//$realclass = 'IndexController';
			//$filePath = 'app/controller/IndexController.php';
			$filePath = $namespace . $realClass . '.php';
			// var_dump($filePath);
			if (!$this->require($filePath)) {
				die('文件不存在');
			}
		}
	}
	protected function require($filePath)
	{
		if (file_exists($filePath)) {
			include $filePath;
			return true;
		}
		return false;
	}
	//要搞一个真实的的映射关系
		//controller ==> app/controller/
		//model ==>app/model
		//framework ==>vendor/lib/framwork/src
		
	function addMap($namespace, $path)
	{
		if (array_key_exists($namespace, $this->maps)) {
			die('映射关系已经存在，没有必要再次添加');
		}
		$this->maps[$namespace] = $path;
		//$maps = ['controller' => 'app/controller'];
	}
}