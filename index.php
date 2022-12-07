<?php 







echo 'ok';

























exit; //==================================================================================================================================================

/*

require_once __DIR__ . '/vendor/autoload.php';

use Db\Db;

//use Admin\Admin;

use Dash\Admin\Page as AdminPage;

use Dash\Users\Page as UserPage;


$admin = new AdminPage("Fish", 23);
$mas = $admin -> getData();
echo $mas['name'].": ".$mas['age'];
echo "<br>";
echo "<br>";
echo "<br>";

$user = new UserPage("Rembo", 33);
$mos = $user -> getData();
echo $mos['name'].": ".$mos['age'];






echo "<br>";
echo "<br>";
echo "<br>";




$db = new Db("localhost", "root", "1", "smart");

$conn = $db -> getConnect();

$ids = 0;

$stmt = $conn->prepare("SELECT * FROM depart WHERE id > ?");

$stmt->bind_param("i", $ids);

$stmt->execute();

$result = $stmt->get_result();


$data = $result->fetch_all(MYSQLI_ASSOC);


foreach ($data as $key => $value){
	
	//$value['title'] = $conn -> real_escape_string($value['title']);
	
	echo $value['id']." ".$value['title'];
	echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";

*/
















?>

