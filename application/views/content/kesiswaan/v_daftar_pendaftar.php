<div class="col-md-10">
<div class="container">

<div class="col-md-12">

<table class="table table-striped">
<tr>
	<th>Nama Pendaftar</th>
</tr>
<?php foreach ($pendaftar as $row): ?>
		<tr>
			<td><?php echo anchor('c_verifpendaftaran/lihatDataPendaftar/'. $row->id_murid, $row->nama_lengkap); ?></td>
		</tr>
<?php endforeach ?>
</table>
</div>