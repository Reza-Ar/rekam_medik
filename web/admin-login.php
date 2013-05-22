<html>
<head>
<font face="sans-serif">
<?php
  include "koneksi.php";
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password_enkripsi=md5($password);
  $perintah="select *from admin where username='$username'";
  $kirim=mysql_query($perintah);
  $admin=mysql_fetch_array($kirim);
  ?>
</head>
<body>
<?php
$cek=strcmp($admin['password'],$password_enkripsi);
if($cek==0){
   echo "<br><br>Berhasil login sebagai Admin $username";
   echo "<br>";
   echo "<p align=center><a href=beranda.php?ke=hm >Klik disini untuk melanjutkan</a></p>";  
   header('Location : beranda.php?ke=hm');
}
else{
  echo "<p align=center>Username atau Password salah</p>";
  echo "<p align=center><a href=index.php >Login Ulang</a></p>";
  //header("Location: login.php");
  }
?>
</body>
</font>
</html>