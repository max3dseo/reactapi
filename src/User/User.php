<?php 
namespace User;


class User{
	
	public $name;
	public $age;
	public $mass = [];
	
	public function __construct($name, $age)
	{
		$this -> name = $name;
		$this -> age = $age;
	}
	
	public function getUser(){
		
		$mass['name'] = $this -> name;
		$mass['age'] = $this -> age;
		
		return $mass;
		
	}
	
}











?>