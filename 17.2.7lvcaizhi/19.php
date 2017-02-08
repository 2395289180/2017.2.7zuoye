<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{ 
		//成员属性 
		public $name = "喜鹊";  
		public $age = 20;  
		public $sex = "公";  
		//成员方法  
		public function __construct($name,$age,$sex){
			$this -> name = $name;
			$this -> age = $age;
			$this -> sex = $sex;
		}
		public function fly(){  
			return $this->name."正在飞......";  
		}  
	}  
	class Xique extends Bird{
		public function fly(){
			//重载父类中的方法
			echo parent::fly();
			return "123";
		}
	}
	//实例化一个对象
	$xique = new Bird("公喜鹊",10,"公");
	echo $xique -> name;
	echo "<br />";
	$xique = new Xique("公喜鹊",20,"公");
	echo $xique -> fly();
	echo $xique -> age;