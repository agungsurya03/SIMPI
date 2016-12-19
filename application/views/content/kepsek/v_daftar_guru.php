<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php echo anchor('c_dataguru/buatDataGuru', 'Tambah'); ?>
<?php if ($guru) { ?>
	<table class="table table-striped">
		<tr>
			<th>Nama Guru</th>
			<th>Status PNS</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach ($guru as $row) {
		?>
			<tr>
				<td><?php echo anchor('c_dataguru/lihatDataGuru/'. $row->id_guru, $row->nama_guru); ?></td>
				<td><?php if ($row->status_pns == 1) {
					echo "PNS";
				}else{
					echo "Bukan PNS";
				}
				?></td>
				<td>
					<?php echo anchor('c_dataGuru/gantiDataGuru/'.$row->id_guru, 'Ganti'); ?>
					<?php echo anchor('c_dataGuru/konfirmasiHapus/'.$row->id_guru, 'Hapus'); ?>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
<?php }else{
	echo "Belum ada guru";
} ?>

</div>