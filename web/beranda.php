<html>
<head><font face="sans-serif">
  <title>Rekam Medik</title>
  <link href="desain.css" rel="stylesheet" type="text/css">	
</head>
<body bgcolor="Gainsboro"><center>
<!-- page -->
<div id="page">
<!-- header -->
<div id="header">
  <h1 align="left">
	<table width="100%">
	  <tr><td align="center"><img src="gambar/Unsyiah-logo.png" width="100px" height="100px"></td>
	 	<td align="left">
		  <table align="left">
		    <tr>
			  <td><font face="arial" size="6px"><b>Rumah Sakit Umum</b></font></td>
			</tr>
			<tr>
			  <td><font face="sans-serif" size="6px"><b>Universitas Syiah Kuala</b></font></td>
			</tr>
		  </table>
		</td>
	  </tr>
	</table>
  </h1>
</div>
<div id="menu"><font face="sans-serif">
  <ul>
	<li><a href="?ke=hm">Home</a></li>
	<li><a>Entry Data</a>
	  <ul>
		<li><a href="?ke=inp">Tambah Data Pasien</a></li>
		<li><a href="?ke=pbr">Input Rekam Medik</a></li>
	  </ul>
	</li>
	<li><a>List</a>
	  <ul>
	    <li><a href="?ke=cri">Cari Data</a></li>
		<li><a href="?ke=sd">Semua Data</a></li>
	  </ul>
	 </li>
	<li><a href="index.php">Logout</a></li>
	</ul>
</font>
</div>

<div id="isi">
<?php
    include "isi.php";
?>
</div>
<!--footer -->
<div id="footer">
  <p align="center"><font face="sans-serif" size="4px"><b>Rekam Medik - Kelompok 1</b></font></p>
</div>  
</div>
</center>
</body>
</font>
</html>