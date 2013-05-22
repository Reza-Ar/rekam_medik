<html>
<head>
<font face="sans-serif">
<title>Login</title>
<?php
  include "koneksi.php";
?>
</head>
<body>
<h1>Login User</h1>
<table cellpadding="5" align=center>
<td></td><td align="center"><img src="gambar/kedokteran.png" width="100px" height="100px"></td>
</table>
<form action="tampil.php" method="post" align=center>
<table cellpadding="5" align=center>
      <tr>
		<td>No Kartu</td><td> : </td><td><input type="text" name="nokartu" placeholder="No Kartu" required></td>
	  </tr>
	  <tr>
		<td>Nama</td><td> : </td><td><input name="nama" type="text" placeholder="Nama" required></td>
	  </tr>
	  <tr>
		<td></td><td></td>
		<td><input type="submit" value="Login" class="button">
		<input type="reset" value="Batal" class="button"></td>
	  </tr>
</table>
</form>
</body>
</font>
</html>