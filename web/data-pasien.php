<html>
<head>
<title>Data Pasien</title>
</head>
<body>
<?php


include"koneksi.php";

$id=$_POST["id"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$tempat=$_POST["tempat_lahir"];
$tgl=$_POST["tanggal_lahir"];
$riwayat=$_POST["riwayat_penyakit"];


$sql="INSERT INTO datapasien values('$id','$nama','$alamat','$tempat', '$tgl', '$riwayat' )";
$result=mysql_query($sql);

?>
<br>
<fieldset>
<legend><h4>Data Pasien Telah Ditambahkan</h4></legend>

<table>

	<tr><td>ID Pasien</td><td>:</td><td><?php echo$id ?></td></tr>
	<tr><td>Nama Pasien</td><td>:</td><td><?php echo$nama ?></td></tr>
	<tr><td>Alamat Pasien</td><td>:</td><td><?php echo$alamat ?></td></tr>
	<tr><td>Tempat Lahir</td><td>:</td><td><?php echo$tempat ?></td></tr>
	<tr><td>Tanggal Lahir</td><td>:</td><td><?php echo$tgl ?></td></tr>
	<tr><td>Riwayat Penyakit</td><td>:</td><td><?php echo$riwayat ?></td></tr>
	
</table>

</fieldset>
<center><a href="?ke=sd">Lihat Data</a> | <a href="?ke=pbr">Tambah Data Baru</a></center>

</body>
</html>