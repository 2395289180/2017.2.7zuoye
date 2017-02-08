<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Bird{
		//成员属性
		public $name = "乌鸦";
		public $age = 20;
		public $sex = "公";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
	class Wuya extends Bird{
		
	}
	$wuya = new Wuya();
	echo $wuya -> name;
	echo "<br />";
	echo $wuya -> fly();