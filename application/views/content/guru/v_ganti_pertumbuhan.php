<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<div class="panel-heading">
    <div class="panel-title">Pertumbuhan Murid</div>
</div>
<div class="panel-body">
	<?php echo form_open('c_pertumbuhan/perbaruiCatPertumbuhan'); ?>
    <table class="table table-striped">
		<tr>
			<td>Berat Badan</td>
			<td>
				<input type="text" name="berat_badan" value="<?php echo $berat_badan; ?>">
			</td>
		</tr>
		<tr>
			<td>Tinggi Badan</td>
			<td>
				<input type="text" name="tinggi_badan" value="<?php echo $tinggi_badan; ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>
				<input type="date" name="tanggal"  value="<?php echo $tanggal; ?>">
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
				<input type="text" name="keterangan" value="<?php echo $keterangan; ?>">
			</td>
		</tr>
	</table>
	<input type="hidden" name="id_pertumbuhan" value="<?php echo $id_pertumbuhan; ?>">
	<input type="hidden" name="id_murid" value="<?php echo $id_murid; ?>">
	<input type="submit" value="Ganti">
	<?php echo form_close(); ?>
</body>
</html>