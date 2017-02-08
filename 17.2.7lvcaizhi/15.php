<?php
	header("Content-Type:text/html;charset=utf-8");
	class Bird{
		//成员属性
		private $name = "燕子"; 
		private $age = 20; 
		private $sex = "公"; 
 		//成员方法
 		public function fly(){ 
 			return "正在飞......"; 
 		}
  		//访问私有的成员属性
		public function getName(){ 
 	 		return $this -> name; 
 	 	} 
  	 	public function setName($name){
  	 		$this -> name = $name;
  	 	}
  	 	public function __get($name){
   	 		if($name == "name"){
	  			return $this -> $name;
	   		}
	   	}
	   	public function __set($name,$value){
 		  	//添加限制访问的条件
 		  	if($name == "name"){
 		  		$this->$name = $value;
 		 	}
   
	  	}
	  	//判断一个属性是否存在
	   	public function __isset($k){
	  	 	return isset($this -> $k);
		} 
 		//注销成员属性
  		public function __unset($k){
  			unset($this->$k);
  		}
  	}
  		//实例化一个对象
  		$wuya = new Bird;
  		$wuya -> setName("乌鸦");
  		echo $wuya -> getName();
  		$wuya -> age = 50;
  		echo $wuya -> age;
  		echo $wuya -> name;
  		$wuya -> name = "喜鹊";
  		unset($wuya -> name);
   		echo $wuya -> name;
	 	var_dump(isset($wuya -> name));
		