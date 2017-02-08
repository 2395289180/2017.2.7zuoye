<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Bird{
		//成员属性
		public $name = "燕子";
		public $age = 30;
		public $sex = "额...";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		
	}
		//实例化一个对象
		$yanzi = new Bird();
		//调用成员属性
		echo $yanzi -> sex;
		echo "<br />";
		echo $yanzi -> fly();
		