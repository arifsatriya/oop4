<html>
<head>
 <title>PBO PHP</title>
</head>
<body>
 <h1><center>HITUNG PAJAK KENDARAAN</center></h1>
	<form method="POST" action="oop4.php">
	 <table align="center" border="0" cellpadding="5">
	 <tr>
		<td align="right">Pilih Jenis Kendaraan</td>
		<td>:</td>
		<td><select name="jenis">
          	 <option value="1">Motor</option>
          	 <option value="2">Mobil 4 roda</option>
          	 <option value="3">Truk Besar</option>
        	</select>
		</td>
	</tr>
	<tr>
		<td align="right">Tulis Tahun Kendaraan </td>
		<td>:</td>
		<td><input type="text" size="10" name="tahun"/></td>
	</tr>
	<tr>
		<td align="right">Nama Pemilik </td>
		<td>:</td>
		<td><input type="text" size="10" name="nama"/></td>
	</tr>
	<tr>
		<td colspan="3" align="right">
	 	<input type="submit" name="simpan" value="HASIL">
		</td>
	</tr>
	</table>
	</form>
</body>
</html>
