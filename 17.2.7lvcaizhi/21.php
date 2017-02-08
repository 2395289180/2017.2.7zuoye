<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	class Bird{    
		//成员属性   
		public $name = "燕子";   
		public $age = 15;   
		public $sex = "母";   
		//成员方法    
		public function __construct($name,$age,$sex){  
			$this -> name = $name;  
			$this -> age = $age;  
			$this -> sex = $sex;  
		}  
		public function fly(){   
			return $this->name."正在飞.......";    
		}    
	}     
	class Yanzi extends Bird{   
		public function fly(){   
			//重载父类中的方法   
			echo parent::fly();  
			return "789"; 
		}  
	}  
	//实例化一个对象  
	$yanzi = new Bird("母燕子",40,"母");
	echo $yanzi -> name; 
	echo "<br />"; 
	$yanzi = new Yanzi("母燕子",60,"母"); 
	echo $yanzi -> fly();  
	echo $yanzi -> age;  