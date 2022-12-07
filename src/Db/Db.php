<?php 
namespace Db;


class Db
{
	
	private $link;
	
	public function __construct($host, $user, $password, $database)
	{
		$this -> link = new \mysqli($host, $user, $password, $database);
	}
	
	public function getConnect()
	{
		return $this -> link; 
	}
	
	
}

















?>