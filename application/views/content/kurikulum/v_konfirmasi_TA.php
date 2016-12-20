<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<h3>Ganti Tahun Ajaran</h3>
Saat ini sedang berlangsung tahun ajaran <?php echo $TA.'/'.($TA+1); ?>
<br>
Apakah anda ingin mengganti ke tahun ajaran <?php echo ($TA+1).'/'.($TA+2); ?> ?
<br>
<?php echo anchor('c_tahunajaran/gantiTA/'.$TA, 'Ya'); ?>
 | 
<?php echo anchor('c_tahunajaran/batalgantiTA', 'Tidak'); ?>
</div>