<?php
  include "koneksi.php";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $password_enkripsi=md5($password);
  
  $perintah="insert into admin(username, password) values ('$username','$password_enkripsi')";
  if(!$kirim=mysql_query($perintah)){
	echo "Gagal simpan data";
  }
  else{
	header("Location: login.php");
  }
?>