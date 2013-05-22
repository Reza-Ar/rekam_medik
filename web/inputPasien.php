<html>
<head>
<title>Input Data Pasien </title>
</head>
 
<body>
<h1>Form Input Data</h1>
 
<form name="input_data" action="?ke=dp" method="POST">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>

        <tr>
            <td>No Kartu</td>
            <td>:</td>
            <td><input type="text" name="id" maxlength="5" required="required" /></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Alamat Pasien</td>
            <td>:</td>
            <td><input type="text" name="alamat" maxlength="150" required="required" /></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" maxlength="10" required="required" /></td>
        </tr>
        <tr>
            <td>Riwayat Penyakit</td>
            <td>:</td>
            <td><input type="text" name="riwayat_penyakit" maxlength="200" required="required" /></td>
        </tr>
       
			<td align="right" colspan="3"><input type="submit" value="Submit">
			<input type="reset" value="Clear"></td>
    </tbody>
</table>

<br>

</form>
</body>
</html>