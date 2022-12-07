<?php 














exit();


//$str  = "test 777 999dxoom asksss-my 33fromse22 real-555-fish 97 229dxxxxx trustssssssssasss coputer";


$str ="755ass333sa-?";




$pattern = '/[^a-z]+[0-9]+/';


$sam = preg_match_all($pattern, $str, $mas);

echo $sam;

echo "\n\n";

var_dump($mas);
















/*
$str = "123Sxxxxxx456D789ss355";
$pattern = '/[1-9]+/';
$sam = preg_match_all($pattern, $str, $mas);
var_dump($mas);
*/
 
 	






















?>

