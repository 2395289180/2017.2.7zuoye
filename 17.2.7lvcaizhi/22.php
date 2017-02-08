<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	abstract class Bird{
		//成员属性
		public $name = "乌鸦";
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		//抽象类
		abstract function chi();
	}
	//继承
	class Wuya extends Bird{
		//在子类中重写
		public function chi(){
			
		}
	}
	//实例化
	$wuya = new Wuya();
	echo $wuya -> name;