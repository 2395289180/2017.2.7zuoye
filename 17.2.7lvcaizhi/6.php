<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{
		//成员属性
		protected $name = "燕子";
		public $age = 20;
		public $sex = "公";
		public function fly(){
		return $this->sex."正在飞……";
		}
	}
		//实例化一个对象
		$yanzi = new Bird();
		// $yanzi -> name = "乌鸦";
		$yanzi -> age = 25;
		echo $yanzi -> fly();