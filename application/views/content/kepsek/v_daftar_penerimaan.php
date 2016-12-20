<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php if ($pendaftar) { ?>
	<table class="table table-striped">
		<tr>
			<th>Nama Pendaftar</th>
		</tr>
		
		<?php foreach ($pendaftar as $row) { ?>
			<tr>
				<td>
					<?php echo anchor('c_penerimaan/lihatDataPendaftar/'.$row->id_murid, $row->nama_lengkap); ?>
				</td>
			</tr>	
		<?php } ?>
	
	</table>
<?php }else{ ?>
	<?php echo "Belum ada Pendaftar" ?>
<?php } ?>
</div>