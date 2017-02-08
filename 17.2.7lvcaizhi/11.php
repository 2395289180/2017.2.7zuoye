<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{
		//成员属性
		public $name = "乌鸦";
		public $age = 10;
		public $sex = "公";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
	//继承
	class Gongwuya extends Bird{
		public $like = "母乌鸦";
	}
	class Wuya extends Gongwuya{
		
	}
	$wuya = new Wuya();
	echo $wuya -> like;
	echo $wuya -> name;
	