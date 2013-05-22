<html>
<head>
<font face="sans-serif">
<title>Login</title>
<?php
  include "koneksi.php";
?>
</head>
<body>
<h1>Login Admin</h1>
<table cellpadding="5" align=center>
<td></td><td align="center"><img src="gambar/kedokteran.png" width="100px" height="100px"></td>
</table>
<form action="masuk.php" method="post" align=center>
<table cellpadding="5" align=center>
      <tr>
		<td>Username</td><td> : </td><td><input type="text" name="username" placeholder="Username" required></td>
	  </tr>
	  <tr>
		<td>Password</td><td> : </td><td><input name="password" type="password" placeholder="Password" required></td>
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