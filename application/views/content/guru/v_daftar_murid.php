<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<h3>Evaluasi Murid</h3>
<table class="table table-striped">
	<tr>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Kelompok Belajar</th>
		<th>Action</th>
	</tr>
	<?php foreach ($murid as $row) { ?>
		<tr>
			<td>
				<?php echo $row->nama_lengkap; ?>
			</td>
			<td>
				<?php echo $row->kelas; ?>
			</td>
			<td>
				<?php echo $row->kel_belajar; ?>
			</td>
			<td>
				<?php echo anchor('c_lapeval/lihatEvalMurid/'.$row->id_murid, 'Evaluasi'); ?>
				<?php echo anchor('c_pertumbuhan/lihatMurid/'.$row->id_murid, 'Catatan Pertumbuhan'); ?>
			</td>
		</tr>
	<?php } ?>
</table>
</div>