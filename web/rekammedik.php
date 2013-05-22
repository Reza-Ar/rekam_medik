<?php
//mysql extention
//membuka koneksi ke mysql 
include "koneksi.php";
$id = $_GET['id'];

//query
$hasil = mysql_query("SELECT * FROM datarekammedik where noKartu='$id'",$koneksi);
$hasil2 = mysql_query("SELECT * FROM datapasien where noKartu='$id'",$koneksi);

$ambilNama = mysql_fetch_array($hasil2, MYSQL_ASSOC);
$nama = $ambilNama['nama'];

    echo "<br>Nama : $nama";
	echo "<br>No Kartu : $id";  
		
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
//menutup koneksi
mysql_close($koneksi);

?>
