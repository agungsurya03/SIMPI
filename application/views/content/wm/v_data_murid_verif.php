<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>Data Murid</td>
		<td>
			<?php 
			if ($vmurid) {
				if ($vmurid->verif == 1) {
					echo "Sudah Terverifikasi";
				} elseif ($vmurid->verif == 0) {
					echo "Belum Terverifikasi";
					echo "<br>".$vmurid->keterangan;
				}
			}else{
				echo "Anda belum mengisi data diri murid";
			}
			?>
		</td>
	</tr>
	<tr>
		<td>Dokumen Murid</td>
		<td>
			<?php 
			if ($vdokumen) {
				if ($vdokumen->verif == 1) {
					echo "Sudah Terverifikasi";
				} elseif ($vdokumen->verif == 0) {
					echo "Belum Terverifikasi";
					echo "<br>".$vdokumen->keterangan;
				}
			}else{
				echo "Anda belum mengupload dokumen";
			}
			?>
		</td>
	</tr>
	<tr>
		<td>Wali Murid</td>
		<td>
			<?php
			if ($vwalimurid) {
				if ($vwalimurid->verif == 1) {
					echo "Sudah Terverifikasi";
				} elseif ($vwalimurid->verif == 0) {
					echo "Belum Terverifikasi";
					echo "<br>".$vwalimurid->keterangan;
				}
			}else{
				echo "Anda belum mengisi data wali murid";
			}
			?>
		</td>
	</tr>
</table>
</body>
</html>