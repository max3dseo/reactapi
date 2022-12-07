<?php 
namespace Admin;


class Admin
{
	private $name;
	private $age;
	
	
	public function __construct($name, $age)
	{
		$this -> name = $name;
		$this -> age = $age;
	}
	
	public function getData()
	{
		$mas = [];
		
		$mas['name'] = $this -> name;
		$mas['age'] = $this -> age;
		
		return $mas;
	}
	
	
	
}














?>


