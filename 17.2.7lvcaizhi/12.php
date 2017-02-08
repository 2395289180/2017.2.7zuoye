<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{
		//成员属性
		public $name = "燕子";
		public $age = 50;
		public $sex = "公";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
	//继承
	class Gongyanzi extends Bird{
		public $like = "母燕子";
	}
	class Yanzi extends Gongyanzi{
		
	}
	$yanzi = new Yanzi();
	echo $yanzi -> like;
	echo $yanzi -> name;
	