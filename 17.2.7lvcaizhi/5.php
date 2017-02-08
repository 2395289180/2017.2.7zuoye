<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{
		//成员属性
		protected $name = "喜鹊";
		public $age = 20;
		public $sex = "公";
		public function fly(){
		return $this->sex."正在飞……";
		}
	}
		//实例化一个对象
		$xique = new Bird();
		// $xique -> name = "乌鸦";
		$xique -> sex = "母";
		echo $xique -> fly();