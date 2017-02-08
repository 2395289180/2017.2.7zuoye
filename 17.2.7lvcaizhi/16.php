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
	class xique extends Bird{
		//成员方法
		public function chi($name){
			$this -> name = $name;
			return $this -> name."正在吃";
		}
	}
	//实例化一个对象
	$xique = new xique();
	echo $xique -> chi("母喜鹊");