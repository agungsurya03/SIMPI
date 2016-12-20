<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<h3>View Data Guru</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <?php echo $nama_guru ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <?php 
                if ($jenis_kelamin == 'L') {
                    echo "Laki-laki";
                }else{
                    echo "Perempuan";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>
                <?php echo $tempat_lahir ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <?php echo $tanggal_lahir ?>
            </td>
        </tr>
        <tr>
            <td>Status PNS</td>
            <td>
                <?php
                if ($status_pns == 1) {
                    echo "PNS";
                }else{
                    echo "Bukan PNS";
                }
                ?>
            </td>
        </tr>
        <tr>
        	<td>
        	<?php echo anchor('c_profilGuru/gantiDataGuru/'.$id_guru,'Ganti Data'); ?>
        	</td>
        </tr>
    </table>
</div>