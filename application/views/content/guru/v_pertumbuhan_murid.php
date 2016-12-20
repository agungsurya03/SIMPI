<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<div class="panel-heading">
    <div class="panel-title">Pertumbuhan Murid</div>
    
    <div class="panel-options">
        <?php echo anchor('c_pertumbuhan/buatCatPertumbuhan/'.$murid->id_murid, '<i class="glyphicon glyphicon-plus"></i>'); ?>
    </div>
</div>
<div class="panel-body">
    <table class="table table-striped">
        <tr>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pertumbuhan as $row) { ?>
            <tr>
                <td><?php echo $row->berat_badan; ?></td>
                <td><?php echo $row->tinggi_badan; ?></td>
                <td><?php echo $row->tanggal; ?></td>
                <td><?php echo $row->keterangan; ?></td>
                <td><?php echo anchor('c_pertumbuhan/gantiCatPertumbuhan/'.$row->id_pertumbuhan, 'Ganti'); ?></td>
                
            </tr>
        <?php } ?>
    </table>
</div>
</div>