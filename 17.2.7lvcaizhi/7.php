<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Bird{
		//成员属性
		public $name = "喜鹊";
		public $age = 30;
		public $sex = "公";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
	//继承
	class Xique extends Bird{
		
	}
	$xique = new Xique();
	echo $xique -> name;
	echo "<br />";
	echo $xique -> fly();