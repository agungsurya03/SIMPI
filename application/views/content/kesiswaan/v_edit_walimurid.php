<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<h3>Edit Data Wali Murid</h3>
<?php echo form_open('c_walimurid/perbaruiDataWaliMurid'); ?>
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $nama; ?>">
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>
					<input type="text" name="tempat_lhr" value="<?php echo $tempat_lhr; ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="date" name="tanggal_lhr" value="<?php echo $tanggal_lhr; ?>">
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>
					<input type="text" name="agama" value="<?php echo $agama; ?>">
				</td>
			</tr>
			<tr>
				<td>No. Telpon</td>
				<td>
					<input type="text" name="telp" value="<?php echo $telp; ?>">
				</td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>
					<input type="text" name="pendidikan" value="<?php echo $pendidikan; ?>">
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>
					<input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>">
				</td>
			</tr>
			<tr>
				<td>Penghasilan</td>
				<td>
					<input type="text" name="penghasilan" value="<?php echo $penghasilan; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat Kantor</td>
				<td>
					<input type="text" name="kantor" value="<?php echo $kantor; ?>">
				</td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td>
					<input type="text" name="warga_negara" value="<?php echo $warga_negara; ?>">
				</td>
			</tr>
		</table>
	<input type="hidden" name="id_wali_murid" value="<?php echo $id_wali_murid ?>">
	<input type="hidden" name="id_murid" value="<?php echo $id_murid ?>">
	<input type="submit" value="Ganti">
<?php echo form_close(); ?>
</div>