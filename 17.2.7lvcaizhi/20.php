<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	class Bird{   
		//成员属性  
		public $name = "乌鸦";  
		public $age = 10;  
		public $sex = "母";  
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
	class Wuya extends Bird{ 
		public function fly(){ 
			//重载父类中的方法 
			echo parent::fly(); 
			return "456";
		} 
	} 
	//实例化一个对象 
	$wuya = new Bird("母乌鸦",20,"母");
	echo $wuya -> name; 
	echo "<br />"; 
	$wuya = new Wuya("母乌鸦",40,"母"); 
	echo $wuya -> fly(); 
	echo $wuya -> age; 