<?php
$no=$_POST["noKartu"];
$tgl=$_POST["tanggal"];
$poli=$_POST["poli"];
$pemeriksaan=$_POST["pemeriksaan"];
$resep=$_POST["resep"];
$dokter=$_POST["namaDokter"];


$sql="INSERT INTO dataRekamMedik values('$no','$tgl','$poli','$pemeriksaan', '$resep', '$dokter' )";
$result=mysql_query($sql);

?>
<fieldset>
<legend><h2>Data Rekam Medik Telah Ditambahkan</h2></legend>

<table>

	<tr><td>No.Kartu Rekam Medik</td><td>:</td><td><?php echo$no ?></td></tr>
	<tr><td>Tanggal</td><td>:</td><td><?php echo$tgl ?></td></tr>
	<tr><td>Poli Klinik</td><td>:</td><td><?php echo$poli ?></td></tr>
	<tr><td>Hasil Pemeriksaan</td><td>:</td><td><?php echo$pemeriksaan ?></td></tr>
	<tr><td>Resep Obat</td><td>:</td><td><?php echo$resep ?></td></tr>
	<tr><td>Nama Dokter</td><td>:</td><td><?php echo$dokter ?></td></tr>
	
</table>


</fieldset>
