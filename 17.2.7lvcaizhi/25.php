<?php
	header("Content-Type:text/html;charset=utf-8");
	interface Bird{
		//成员属性
		const NAME = "乌鸦";
		//成员方法，不写方法体
		public function fly();
		
	}
	interface Zoo{
		public function pa();
	}
	//继承
	class Wuya implements Brid,Zoo{
		//重写方法
		public function fly($name){
			self::NAME = $name;
			return self::NAME."正在飞";
		}
		public function pa(){
			return "正在爬......";
		}
	}
	//实例化对象
	$wuya = new Wuya();
	echo $wuya -> fly("喜鹊");