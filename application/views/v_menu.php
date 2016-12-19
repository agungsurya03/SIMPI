<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div>
                <?php echo anchor('c_profilGuru/lihatDataGuru/'.$this->session->userdata('id_guru'), 'Edit Profile'); ?>
            </div>
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <?php 
						$old_otoritas = "";
						foreach ($otoritas as $row): ?>
						<?php if ($row->otoritas != $old_otoritas){
							$old_otoritas = $row->otoritas;
							echo "---------------<br>";
						} ?>
						<li>
                            <a href="<?php echo base_url().$row->controller ?>"><i class="glyphicon glyphicon-record"></i> <?php echo $row->tulisan ?></a>
                        </li>
					<?php endforeach ?>
                </ul>
            </div>
        </div>
</body>
</html>