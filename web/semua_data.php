<?php
//mysql extention
//membuka koneksi ke mysql 
include "koneksi.php";

//query
$hasil = mysql_query("SELECT * FROM datapasien",$koneksi);

	echo "<br>";
	echo "Menampilkan data semua pasien.";
	echo "<br><br>";
	echo "<table border=1 align=center>";
	echo "<tr><td>No Kartu</td>";
	echo "<td>Nama</td>";
	echo "<td>Alamat</td>";
	echo "<td>Tempat Lahir</td>";
	echo "<td>Tanggal Lahir</td>";
	echo "<td>Riwayat Penyakit</td>";
	
//tampilkan hasilnya
while($row = mysql_fetch_array($hasil, MYSQL_ASSOC)){
	$no = $row['noKartu'];
	$nama = $row['nama'];
	$alamat = $row['alamat'];
	$tempat_lahir = $row['tempat_lahir'];
	$tanggal_lahir = $row['tanggal_lahir'];
	$riwayat_penyakit = $row['riwayat_penyakit'];
?>

<tr>
<td><a href='?ke=rkm&id= <?php echo "$no"?>'><?php echo $no;?></a></td>
<td><?php echo $nama;?></td>
<td><?php echo $alamat;?></td>
<td><?php echo $tempat_lahir;?></td>
<td><?php echo $tanggal_lahir;?></td>
<td><?php echo $riwayat_penyakit;?></td>
</tr>

<?php
}

echo "</table>";
//menutup koneksi
mysql_close($koneksi);

?>
