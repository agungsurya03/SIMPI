<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<h3>Evaluasi Murid</h3>
<table class="table table-striped">
	<tr>
		<th>Nama</th>
	</tr>
	<?php foreach ($murid as $row) { ?>
		<tr>
			<td>
				<?php echo anchor('c_pertumbuhan/buatCatPertumbuhan/.'$row->id_murid, $row->nama_lengkap); ?>
			</td>
		</tr>
	<?php } ?>
</table>
</div>