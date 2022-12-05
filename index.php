<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';


use Db\Db;

$base = new Db();

$conn = $base -> getConnect('localhost', 'root', '1', 'smart');


//--------------------------------------  Процедурный стиль -----------------------------------------------------------

$query = "select * from depart where id = 2";

/*
$result = mysqli_query($conn, $query);
while ($myrow = mysqli_fetch_assoc($result))
{
	echo $myrow['id'].": ".$myrow['title'];
	echo "<br>";
}
*/

//-----------------------------------------------------------------------------------------------------------------------












/*
$base = new Db();
$conn = $base -> getConnect('localhost', 'root', '1', 'smart');
$query = "select * from depart where id = ?";
$conn = mysqli_prepare($conn, $query);
*/










/*
use Db\Db;


//$conn = new Db('localhost', 'root', '1', 'smart');

$base = new Db();

$conn = $base -> getConnect('localhost', 'root', '1', 'smart'); 


$query = "select * from depart";


if($result = $conn -> query($query)){
	
    foreach($result as $row){
    	
    	echo $row['id'].": ---  ".$row['title'];
    	echo "<br>";
    	
    }
}

*/

/*
$query = "select * from depart";

$result = mysqli_query($conn, $query);

while ($myrow = mysqli_fetch_assoc($result))
{	
	
	echo $myrow['id'].": ".$myrow['title'];
	echo "<br>";
}

*/

//var_dump($result);
