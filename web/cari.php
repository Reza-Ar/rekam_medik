<?php
include "koneksi.php";

$keyword = $_POST["keyword"];
$klasifikasi = $_POST["klasifikasi"];

if(!isset($keyword) || !isset($klasifikasi)){
header('Location: ?ke=cri') ;
exit;
}else{
$sql = "SELECT * FROM datapasien WHERE $klasifikasi LIKE '%$keyword%'";

$hasil = mysql_query($sql);
$num = mysql_num_rows($hasil);
mysql_close();
}

if($num!=0){
	echo "<br>";
	echo "Menampilkan Hasil Pencarian untuk : $keyword <br><br>";
	echo "<table border=2 align=center>";
	echo "<tr><td>No Kartu</td>";
	echo "<td>Nama</td>";
	echo "<td>Alamat</td>";
	echo "<td>Tempat Lahir</td>";
	echo "<td>Tanggal Lahir</td>";
	echo "<td>Riwayat Penyakit</td>";
	echo "</tr>";

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
}
else{
echo "tidak ada $klasifikasi yang bernilai $keyword";
}
?>