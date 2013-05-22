<?php

$hostName = "localhost"; //alamat host
$userMySQL = "root";	 //username di mysql server
$passMySQL = "";	 //password di mysql server
$dbaseName = "rekammedik"; //Nama database

$conn = mysql_connect($hostName, $userMySQL, $passMySQL) or die(mysql_error());

$selectDB = mysql_select_db($dbaseName, $conn);
if(!$selectDB){
	echo "Database " .$dbaseName." tidak ditemukan!";
exit();
}

?>