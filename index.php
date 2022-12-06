<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';









$str = " 222 test123  888 froms 909fish- samson good-4real 999";

$pattern = "/[a-z]{1,2}/";

$names = array("Jhon Carter", "Clark Kent", "John Rambo");

$matches = preg_grep($pattern, $names);

// Перебираем массив и отображаем совпадающие имена
foreach($matches as $match){
	echo $match . "<br>";
}


























/*

use Db\Db;

$base = new Db();

$connect = $base -> getConnect('localhost', 'root', '1', 'smart');


//--------------------------------------  Процедурный стиль -----------------------------------------------------------

$query = "select * from depart where id = 2";





$ids = 2;

//$connect=new mysqli($host, $user, $password, $db); // иницилизируем подключение к бд

$query='SELECT * FROM depart WHERE id=?'; // объявляем переменную с запросом

$stmt = $connect->prepare($query); // подготавливаем наш запрос

$stmt->bind_param('i', $ids); // присваеваем первому ? в запросе параметр с типом данных s (string)

$stmt->execute(); // выполняем подготовленный запрос

$result=$stmt->get_result(); // получаем результат из подготовленного запроса


$myrow = mysqli_fetch_assoc($result);

echo $myrow['title'];



//var_dump($result);

$rows=$result->num_rows; // получаем кол-во строк в полученном результате из запроса



if($rows) { // если строки найдены
	
	// такой аккаунт уже найден выводим ошибку;
	
} else { // если строки не найдены
	
	
	// аккаунт не найден, регистрируем;
}

$result->free(); // очищаем результат

$stmt->close(); // закрываем подготовленный запрос

$connect->close(); // закрываем подключение

*/







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
