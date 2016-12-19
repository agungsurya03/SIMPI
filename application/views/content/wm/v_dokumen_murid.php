<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><br><br>
<center>
<div class="row">
	<div class="col-sm-4">
		<?php echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen');
			if ($this->session->userdata('kk') == 0) {
				echo "Kartu Keluarga<br>BELUM UPLOAD<br>";?>

				<img src="<?php echo base_url().'assets/aspire/'?>images/camera-icon-md.png">
				<input type="file" name="dokumen" size="20">
				<input type="hidden" name="jenis_dok" value="1">
				<input type="submit" value="Upload">
			<?php
			} else{
				echo "Kartu Keluarga<br>";?>
				<img style="max-width: 400px ; max-height: 400px" src="<?php echo base_url().'/assets/img/'.$kk->path?>">
				<input type="file" name="dokumen" size="20">
				<input type="hidden" name="jenis_dok" value="1">
				<input type="submit" value="Ganti">
				<?php
			}
		echo form_close();
		?>
	</div>
	<div class="col-sm-4">
		<?php echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen');
			if ($this->session->userdata('akta') == 0) {
				echo "Akta<br>BELUM UPLOAD<br>";?>

				<img src="<?php echo base_url().'assets/aspire/'?>images/camera-icon-md.png">
				<input type="file" name="dokumen" size="20">
				<input type="hidden" name="jenis_dok" value="2">
				<input type="submit" value="Upload">
			<?php
			} else{
				echo "Akta<br>";?>
				<img style="max-width: 400px ; max-height: 400px" src="<?php echo base_url().'/assets/img/'.$akta->path?>">
				<input type="file" name="dokumen" size="20">
				<input type="hidden" name="jenis_dok" value="2">
				<input type="submit" value="Ganti">
				<?php
			}
		echo form_close();
		?>
	</div>
	<div class="col-sm-4">
		<?php echo form_open_multipart('index.php/c_dokumenDaftar/unggahDokumen');
			if ($this->session->userdata('foto') == 0) {
				echo "Foto<br>BELUM UPLOAD<br>";?>

				<img src="<?php echo base_url().'assets/aspire/'?>images/camera-icon-md.png">
				<input type="file" name="dokumen" size="20">
				<input type="hidden" name="jenis_dok" value="3">
				<input type="submit" value="Upload">
			<?php
			} else{
				echo "Foto<br>";?>
				<img style="max-width: 400px ; max-height: 400px" src="<?php echo base_url().'/assets/img/'.$foto->path?>">
				<input type="file" name="dokumen" size="20">
				<input type="hidden" name="jenis_dok" value="3">
				<input type="submit" value="Ganti">
				<?php
			}
		echo form_close();
		?>
	</div>
</div>
</center>
</body>
</html>