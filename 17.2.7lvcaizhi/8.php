<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Bird{
		//成员属性
		public $name = "燕子";
		public $age = 100;
		public $sex = "母";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
	class Yanzi extends Bird{
		
	}
	$yanzi = new Yanzi();
	echo $yanzi -> name;
	echo "<br />";
	echo $yanzi -> fly();