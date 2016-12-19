<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<script type="text/javascript">
     $(document).ready(function(){
        $("#kesehatan").change(function(){
           var value = $(this).val();
            if(value==1)
            {
                $("#kesehatan_desk").show();
            }
            else 
            {
               $("#kesehatan_desk").hide();
            }
        });

        $("#khusus").change(function(){
           var value = $(this).val();
            if(value==1)
            {
                $("#khusus_desk").show();
            }
            else 
            {
               $("#khusus_desk").hide();
            }
        });
    });
 </script>

<body>
<?php echo form_open('index.php/c_pendaftaran/perbaruiFormulir'); ?>
<div class="container">
        <h2>Pendaftaran</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Data Murid</a></li>
            <li><a data-toggle="tab" href="#menu1">Data Wali Murid</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <center>
                    <h3>Biodata Murid</h3></center>
                    <table style="margin:20px auto;">
                        <input type="hidden" name="id_murid" value="<?php echo $murid->id_murid ?>">
                        <input type="hidden" name="status" value="<?php echo $murid->status ?>">
                        <tr>
                            <td>NIM</td>
                            <td>
                                <input type="text" name="no_induk" value="<?php echo $murid->no_induk ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="nama_lengkap" maxlength="50" value="<?php echo $murid->nama_lengkap ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>
                                <input type="text" name="nama_panggilan" maxlength="10" value="<?php echo $murid->nama_panggilan ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                            <?php
                            if ($murid->jenis_kelamin == 'L') {
                            ?>
                                <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                                <br>
                            <?php
                            }else{
                            ?>
                                <input type="radio" name="jenis_kelamin" value="L" > Laki-laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
                                <br>
                            <?php
                            }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>
                                <input type="text" name="tempat_lahir" maxlength="10" value="<?php echo $murid->tempat_lahir ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="date" name="tanggal_lahir" value="<?php echo $murid->tanggal_lahir ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama" maxlength="10" value="<?php echo $murid->agama ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="alamat" maxlength="50" value="<?php echo $murid->alamat ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor Telpon</td>
                            <td>
                                <input type="text" name="telp" maxlength="40" value="<?php echo $murid->telp ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>
                                <input type="number" name="jumlah_saudara" min="1" value="<?php echo $murid->jumlah_saudara ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>
                                <input type="number" name="anak_ke" min="1" value="<?php echo $murid->anak_ke ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="warga_negara" maxlength="20" value="<?php echo $murid->warga_negara ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Sehari-hari</td>
                            <td>
                                <input type="text" name="bahasa" maxlength="20" value="<?php echo $murid->bahasa ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Apakah ada Kesehatan yang perlu diperhatikan secara khusus?</td>
                            <td>
                                <select name="kesehatan" id="kesehatan">
                                <?php if ($murid->kesehatan == 1) { ?>
                                    <option value="0">Tidak</option>
                                    <option value="1" selected>Ya</option>
                                <?php }else{ ?>
                                    <option value="0" selected>Tidak</option>
                                    <option value="1">Ya</option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" id="kesehatan_desk" style="display: none">
                                Kesehatan yang perlu di perhatikan secara khusus
                                <br>
                                <textarea name="kesehatan_desk" rows="10" cols="30"><?php echo $murid->kesehatan_desk ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Apakah ada permasalahan khusus yang perlu diperhatikan?</td>
                            <td>
                                <select name="khusus" id="khusus">
                                    <?php if ($murid->khusus == 1) { ?>
                                    <option value="0">Tidak</option>
                                    <option value="1" selected>Ya</option>
                                <?php }else{ ?>
                                    <option value="0" selected>Tidak</option>
                                    <option value="1">Ya</option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" id="khusus_desk" style="display: none">
                                Permasalahan yang perlu di perhatikan secara khusus
                                <br>
                                <textarea name="khusus_desk" rows="10" cols="30"><?php echo $murid->khusus_desk ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Kebiasaan / Kesenangan / Ketidaksenangan anak
                                <br>
                                <textarea name="kebiasaan" rows="10" cols="30"><?php echo $murid->kebiasaan; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Tinggal Bersama</td>
                            <td>
                            <?php
                            if ($murid->tinggal == '1') {
                            ?>
                                <input type="radio" name="tinggal" value="1" checked> Keluarga Sendiri
                                <br>
                                <input type="radio" name="tinggal" value="2"> Keluarga Lain
                                <br>
                            <?php
                            }else{
                            ?>
                                <input type="radio" name="tinggal" value="1" > Keluarga Sendiri
                                <br>
                                <input type="radio" name="tinggal" value="2" checked> Keluarga Lain
                                <br>
                            <?php
                            }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Penghuni Rumah</td>
                            <td>
                                <input type="text" name="penghuni_dewasa" value="<?php echo $murid->penghuni_dewasa ?>"> Dewasa
                                <input type="text" name="penghuni_sebaya" value="<?php echo $murid->penghuni_sebaya ?>"> Anak-anak
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ayah</td>
                            <td>
                            <?php 
                                if ($murid->hub_ayah == 1) {
                                ?>
                                    <input type="radio" name="hub_ayah" value="1" checked> Kurang Erat
                                    <br>
                                    <input type="radio" name="hub_ayah" value="2"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hub_ayah" value="3"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hub_ayah == 2) {
                                ?>
                                    <input type="radio" name="hub_ayah" value="1"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hub_ayah" value="2" checked> Cukup Erat
                                    <br>
                                    <input type="radio" name="hub_ayah" value="3"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hub_ayah == 3) {
                                ?>
                                    <input type="radio" name="hub_ayah" value="1"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hub_ayah" value="2"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hub_ayah" value="3" checked> Sangat Erat
                                    <br>
                                <?php
                                }
                             ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ibu</td>
                            <td>
                            <?php 
                                if ($murid->hub_ibu == 1) {
                                ?>
                                    <input type="radio" name="hub_ibu" value="1" checked> Kurang Erat
                                    <br>
                                    <input type="radio" name="hub_ibu" value="2"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hub_ibu" value="3"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hub_ibu == 2) {
                                ?>
                                    <input type="radio" name="hub_ibu" value="1"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hub_ibu" value="2" checked> Cukup Erat
                                    <br>
                                    <input type="radio" name="hub_ibu" value="3"> Sangat Erat
                                    <br>
                                <?php
                                }elseif ($murid->hub_ibu == 3) {
                                ?>
                                    <input type="radio" name="hub_ibu" value="1"> Kurang Erat
                                    <br>
                                    <input type="radio" name="hub_ibu" value="2"> Cukup Erat
                                    <br>
                                    <input type="radio" name="hub_ibu" value="3" checked> Sangat Erat
                                    <br>
                                <?php
                                }
                             ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Pergaulan Sebaya</td>
                            <td>
                            <?php 
                                if ($murid->pergaulan_sebaya == 1) {
                                ?>
                                    <input type="radio" name="pergaulan_sebaya" value="1" checked> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="2"> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="3"> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="4"> Banyak
                                    <br>
                                <?php
                                }elseif ($murid->pergaulan_sebaya == 2) {
                                ?>
                                    <input type="radio" name="pergaulan_sebaya" value="1"> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="2" checked> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="3"> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="4"> Banyak
                                <?php
                                }elseif ($murid->pergaulan_sebaya == 3) {
                                ?>
                                    <input type="radio" name="pergaulan_sebaya" value="1"> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="2"> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="3" checked> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="4"> Banyak
                                <?php
                                }elseif ($murid->pergaulan_sebaya == 4) {
                                ?>
                                    <input type="radio" name="pergaulan_sebaya" value="1"> Sangat Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="2"> Kurang
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="3"> Cukup
                                    <br>
                                    <input type="radio" name="pergaulan_sebaya" value="4" checked> Banyak
                                <?php
                                }
                             ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Imunisasi</td>
                            <?php 
                            if ($murid->imunisasi == 1) {
                            ?>
                                <td>
                                <input type="radio" name="imunisasi" value="1" checked> Lengkap
                                <br>
                                <input type="radio" name="imunisasi" value="0"> Belum Lengkap
                                <br>
                                </td>
                            <?php
                            }else{
                             ?>
                                <td>
                                <input type="radio" name="imunisasi" value="1"> Lengkap
                                <br>
                                <input type="radio" name="imunisasi" value="0" checked> Belum Lengkap
                                <br>
                                </td>
                             <?php
                            }
                            ?>
                        </tr>
                    </table>


            </div>
            <div id="menu1" class="tab-pane fade">
                <center>
                    <h3>Biodata Wali Murid</h3></center>
                <table style="margin:20px auto;">
                    <tr>
                        <td colspan="2"><b>Data Ayah</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>
                            <input type="text" name="nama_ayah" maxlength="50" value="<?php echo $waliayah->nama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ayah" maxlength="20" value="<?php echo $waliayah->tempat_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ayah" value="<?php echo $waliayah->tanggal_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ayah" maxlength="10" value="<?php echo $waliayah->agama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ayah" maxlength="40" value="<?php echo $waliayah->telp?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ayah" maxlength="10" value="<?php echo $waliayah->pendidikan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ayah" maxlength="20" value="<?php echo $waliayah->pekerjaan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ayah" value="<?php echo $waliayah->penghasilan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ayah" maxlength="50" value="<?php echo $waliayah->kantor?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ayah" maxlength="20" value="<?php echo $waliayah->warga_negara?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><b>Data Ibu</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>
                            <input type="text" name="nama_ibu" maxlength="50" value="<?php echo $waliibu->nama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ibu" maxlength="20" value="<?php echo $waliibu->tempat_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ibu" value="<?php echo $waliibu->tanggal_lhr?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ibu" maxlength="10" value="<?php echo $waliibu->agama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ibu" maxlength="40" value="<?php echo $waliibu->telp?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ibu" maxlength="10" value="<?php echo $waliibu->pendidikan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ibu" maxlength="20" value="<?php echo $waliibu->pekerjaan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ibu" value="<?php echo $waliibu->penghasilan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ibu" maxlength="50" value="<?php echo $waliibu->kantor?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ibu" maxlength="20" value="<?php echo $waliibu->warga_negara?>">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<input type="submit" value="Selesai">
<?php echo form_close(); ?>
</body>
</html>