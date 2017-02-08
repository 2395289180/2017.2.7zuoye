<?php
	header("Content-Type:text/html;charset=utf-8"); 
	class Bird{ 
		//成员属性 
		public $name = "乌鸦";  
		public $age = 20;  
		public $sex = "母";  
		//成员方法 
		public function fly(){  
			return "正在飞.......";  
		}  
	}  
	class Wuya extends Bird{ 
		//成员方法
		public function chi($name){ 
			$this -> name = $name; 
			return $this -> name."正在吃"; 
		} 
	} 
	//实例化一个对象 
	$wuya = new Wuya();
	echo $wuya -> chi("公乌鸦");