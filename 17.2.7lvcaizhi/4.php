<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{
		//成员属性
		protected $name = "乌鸦";
		public $age = 20;
		public $sex = "公";
		public function fly(){
		return $this->age."正在飞……";
		}
	}
		//实例化一个对象
		$wuya = new Bird();
		$wuya -> age = 30;
		echo $wuya -> fly();