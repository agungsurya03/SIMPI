<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php
if ($murid) { ?>
	<table class="table table-striped">
		<tr>
			<th>Nama Pendaftar</th>
			<th>Status</th>
		</tr>
		<?php
		foreach ($murid as $row) { ?>
		
		<tr>
			<td>
				<?php echo $row->nama_lengkap; ?>
			</td>
			<td>
				<?php
				if ($row->status == 2) {
					echo "Proses Verifikasi Dokumen";
				}elseif ($row->status == 3) {
					echo "Verifikasi Gagal";
				}
				?>
			</td>
		</tr>

		<?php }
		?>
	</table>
<?php }else{
	echo "Belum ada Pendaftar";
}
?>
</div>