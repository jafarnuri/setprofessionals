<?php 

try { 
	$db= new PDO("mysql:host=localhost;dbname=ilkproje;charset=utf8",'root','');

	//echo "Verilenler  bazasina  ugurlu baglanti";
	
} catch (PDOExpception $e) {

	echo $e-> getMessage();
	
}


 ?>
 