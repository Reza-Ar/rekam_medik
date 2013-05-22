<html>
<head>
<title>Input Data Pasien</title>
</head>
 
<body>
<h1>Form Input Data</h1>
 
<form name="input_data" action="?ke=drm" method="POST">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>

        <tr>
            <td>No.Kartu Rekam Medik</td>
            <td>:</td>
            <td><input type="text" name="noKartu" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="tanggal" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Poli Klinik</td>
            <td>:</td>
            <td><input type="text" name="poli" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Hasil Pemeriksaan</td>
            <td>:</td>
            <td><input type="text" name="pemeriksaan" maxlength="100" required="required" /></td>
        </tr>
        <tr>
            <td>Resep Obat</td>
            <td>:</td>
            <td><input type="text" name="resep" maxlength="80" required="required" /></td>
        </tr>
        <tr>
            <td>Nama Dokter Pemeriksa</td>
            <td>:</td>
            <td><input type="text" name="namaDokter" maxlength="20" required="required" /></td>
        </tr>
       
			<td align="right" colspan="3"><input type="submit" value="Submit">
			<input type="reset" value="Clear"></td>
    </tbody>
</table>

<br>

</form>
</body>
</html>