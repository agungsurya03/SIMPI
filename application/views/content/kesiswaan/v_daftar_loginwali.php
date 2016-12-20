<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php echo anchor('c_loginwalimurid/buatIdLogin', 'Tambah'); ?>

<table class="table table-striped">
	<tr>
		<th>Username</th>
		<th>Nama Murid</th>
		<th>Action</th>
	</tr>
	<?php 
	foreach ($idlogin as $row) {
	?>
	<tr>
		<td><?php echo $row->username ?></td>
		<td><?php echo $row->nama_lengkap ?></td>
		<td>
			<?php echo anchor('c_loginwalimurid/gantiIdLogin/'.$row->id_login, 'Lupa Pass / Ganti ID   '); ?>
			<?php echo anchor('c_loginwalimurid/konfirmasiHapus/'.$row->id_login, 'Hapus'); ?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</div>