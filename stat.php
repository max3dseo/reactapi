<?php 




// /home/work/plant/reactapi.com/src/files/stat.txt


$mas = file("src/files/stat.txt");

$pattern = "/\\$+[0-9]+\.[0-9]+/";

$profit2 = 0;

foreach ($mas as $value){
	
	
	$sam = preg_match($pattern, $value, $mas);
	$profit = $mas[0];
	$profit = str_replace("$","",$profit);
	
	$profit2 = $profit2 + $profit;
	
	//echo $profit;
	//echo "<br>";
	
}

echo $profit2;












exit;











































?>
