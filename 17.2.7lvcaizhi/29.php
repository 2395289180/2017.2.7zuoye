<?php 
	header("Content-Type:text/html;charset=utf-8");  
	abstract class Zoo{  
		abstract function fly();   
		abstract function pa();  
	} 
	interface Dog{ 
		public function chi(); 
	} 
	interface Pig{ 
		public function shui(); 
	} 
	class Bird extends ZOO implements Dog,Pig{ 
		//重写接口中父类方法 
		public function fly(){ 
			 
		} 
		public function pa(){ 
			 
		}
		public function chi(){ 
			 
		} 
		public function shui(){ 
			 
		} 
	} 