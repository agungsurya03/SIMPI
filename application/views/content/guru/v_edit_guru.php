<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php echo form_open('index.php/c_profilGuru/perbaruiDataGuru'); ?>
	<input type="hidden" name="id_guru" value="<?php echo $id_guru ?>">
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama_guru" value="<?php echo $nama_guru?>">		
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<?php if ($jenis_kelamin == 'L') { ?>
					<input type="radio" name="jenis_kelamin" value="L" checked> L
					<input type="radio" name="jenis_kelamin" value="P" > P	
				<?php }else{ ?>
					<input type="radio" name="jenis_kelamin" value="L" > L
					<input type="radio" name="jenis_kelamin" value="P" checked> P
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>
				<input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir?>">		
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir?>">		
			</td>
		</tr>
		<tr>
			<td>Status PNS</td>
			<td>
				<?php if ($status_pns == 1) { ?>
					<input type="radio" name="status_pns" value="1" checked> PNS
					<input type="radio" name="status_pns" value="0"> Bukan PNS
				<?php }else{ ?>
					<input type="radio" name="status_pns" value="1"> PNS
					<input type="radio" name="status_pns" value="0" checked> Bukan PNS
				<?php } ?>	
			</td>
		</tr>
		<tr>
			<td><input type="Submit" value="Ganti"></td>
		</tr>
	</table>
<?php echo form_close(); ?>
</div>