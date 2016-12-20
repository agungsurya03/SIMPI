<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open('c_pertumbuhan/tambahCatPertumbuhan'); ?>
<input type="hidden" name="id_murid" value="<?php echo $id_murid?>">
<table>
	<tr>
		<td>Berat</td>
		<td><input type="text" name="berat_badan"></td>
	</tr>
	<tr>
		<td>Tinggi</td>
		<td><input type="text" name="tinggi_badan"></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td><input type="date" name="tanggal"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan"></td>
	</tr>
</table>
<input type="submit" value="Tambah">
<?php echo form_close(); ?>
</body>
</html>