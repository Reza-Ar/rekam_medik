<?php
/*************************************
Pengecekan user dan redirect ke halaman 
adminstrator
**************************************/

// memangil file config.php untuk keperluan koneksi ke databse
require_once("config.php");

$username = $_POST['username'];isset($_POST['username']);
$password = $_POST['password'];isset($_POST['password']);
//$username = 'ryan';
//$password = 'admin';
//memeriksa apabila form login yang kosong
if (empty($username) || empty($password))
{
header("Location:../?msg=1");
exit();
}

// Define $username and password

//$username = $_POST['email'];
//$password = $_POST['password'];

// to protect mysql injection
$username = mysql_real_escape_string(stripslashes($username));
$password = mysql_real_escape_string(stripslashes($password));

$sql = "SELECT username,password FROM admin WHERE ";
$sql.= "username= '".$username."' ";

// memeriksa apabila user tidak terdaftar
$query = @mysql_query($sql);
if(!@mysql_num_rows($query)>0)
{
	header("Location:../?msg=2");
	exit();
	
}
$result = @mysql_fetch_object($query);

//membandingkan password pada database dan password dari form
 
 if(($result->password)==(md5($password))){
 
session_start();
$_SESSION['cookie_username']= $result->username;
$_SESSION['cookie_password']= base64_encode ('result->password:date ("D-m-y")');

session_register("cookie_username");
session_register("cookie_password");
header("Location:../data/");
}else
{
header("Location:../?msg=3");
exit();
}
?>