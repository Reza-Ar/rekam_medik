<html>
<head>
<title>Input Data Pasien</title>
</head>
<body>
<fieldset>
<legend><h2>Masukkan data Rekam Medik</h2></legend>
<form name="input" action="data-rekamMedik.php" method="POST">
<table>
	
	<tr><td>No.Kartu Rekam Medik</td><td>:</td><td><input type="text" name="noKartu"></td></tr>
	<tr><td>Tanggal</td><td>:</td><td><input type="date" name="tanggal"></td></tr>
	<tr><td>Poli Klinik</td><td>:</td><td><input type="text" name="poli"></td></tr>
	<tr><td>Hasil Pemeriksaan</td><td>:</td><td><input type="text" name="pemeriksaan"></td></tr>
	<tr><td>Resep Obat</td><td>:</td><td><input type="text" name="resep"></td></tr>
	<tr><td>Nama Dokter Pemeriksa</td><td>:</td><td><input type="text" name="namaDokter"></td></tr>
	<br>
	
	</table>
		<br>
			<tr><td><input type="checkbox">Apapun yang saya isi pada form ini adalah benar dan jika terdapat data yang salah, saya bersedia menerima sanksi.</td></tr>

		<br>
		<br>
			<input type="submit" value="tambahkan">
			<input type="reset" value="bersihkan">
</form>
</fieldset>


</body>
</html>