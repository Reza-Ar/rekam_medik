<?php
//mysql extention
//membuka koneksi ke mysql 
include "koneksi.php";
$nokartu = $_POST['nokartu'];
$nama = $_POST['nama'];

//query
if(!isset($nokartu) || !isset($nama)){
//header('Location: index.php') ;
//exit;
}else{

$hasil2 = mysql_query("SELECT * FROM datapasien where noKartu='$nokartu' AND nama='$nama'");
$num = mysql_num_rows($hasil2);
}
if($num!=0){
$hasil = mysql_query("SELECT * FROM datarekammedik where noKartu='$nokartu'",$koneksi);


$ambilNama = mysql_fetch_array($hasil2, MYSQL_ASSOC);
$namaPasien = $ambilNama['nama'];

    echo "<br>Nama : $namaPasien";
	echo "<br>No Kartu : $nokartu";  
		
	echo "<table border=1>";
	echo "<tr><td>Tanggal Berobat</td>";
	echo "<td>Poli Klinik</td>";
	echo "<td>Pemeriksaan</td>";
	echo "<td>Pengobatan</td>";
	echo "<td>Dokter</td>";
	
//tampilkan hasilnya
while($row = mysql_fetch_array($hasil, MYSQL_ASSOC)){
	$tanggal = $row['tanggal'];
	$poli = $row['poli'];
	$pemeriksaan = $row['pemeriksaan'];
	$resep = $row['resep'];
	$namaDokter = $row['namaDokter'];
?>

<tr>
<td><?php echo $tanggal;?></td>
<td><?php echo $poli;?></td>
<td><?php echo $pemeriksaan;?></td>
<td><?php echo $resep;?></td>
<td><?php echo $namaDokter;?></td>
</tr>

<?php
}

echo "</table>";
echo "<br><br>";
echo "<a href='index.php'>Logout</a>";
//menutup koneksi
}
else{
echo "<br><br>";
echo "Harap periksa kembali nomor kartu dan nama Anda";
echo "<br><br>";
echo "<a href='index.php'>Kembali</a>";
}
mysql_close($koneksi);
?>

