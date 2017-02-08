<?php
	header("Content-Type:text/html;charset=utf-8");
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
	class Gongxique extends Bird{
		public $like = "母喜鹊";
	}
	class Xique extends Gongxique{
		
	}
	$xique = new Xique();
	echo $xique -> like;
	echo $xique -> name;
	