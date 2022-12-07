<?php 
namespace Db;
/*
 DEFINE("DB_HOST", "localhost");
 DEFINE("DB_USER", "cinemabyalex");
 DEFINE("DB_PASSWD", "F5dfgdfg3lG");
 DEFINE("DB_NAME", "worked");

 $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);

 mysqli_set_charset($connect, "utf8");


 mysqli_query


 $sql = "SELECT * FROM Users";
 if($result = $conn->query($sql)){
 foreach($result as $row){
 	
 $userid = $row["id"];
 $username = $row["name"];
 $userage = $row["age"];
 }
 }

 */



class Db{
	
	
	private $host;
	private $user;
	private $pass;
	private $db_name;
	public  $conn;
	
	public function getConnect($host, $user, $pass, $db_name)
	{
			$this -> host = $host;
			$this -> user = $user;
			$this -> pass = $pass;
			$this -> db_name = $db_name;
			
		$this -> conn = mysqli_connect($host, $user, $pass, $db_name);  // Процедурный стиль 	
		
		//$this -> conn = new mysqli($host, $user, $pass, $db_name);    // Объектно-ориентированный стиль
			
		return $this -> conn; 
		
		
	}
	
}






















