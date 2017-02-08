<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Bird{
		//成员属性
		public $name = "xique";
		public $age = 30;
		public $sex = "母";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
		//实例化一个对象
		$xique = new Bird();
		//调用成员属性
		echo $xique -> age;
		echo "<br />";
		echo $xique -> fly();
		