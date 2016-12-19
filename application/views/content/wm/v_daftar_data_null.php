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
                <?php echo form_open('c_pendaftaran/tambahDaftar'); ?>
                    <table style="margin:20px auto;">
                        <input type="hidden" name="id_murid" value="<?php echo $this->session->userdata('id_murid') ?>">
                        <input type="hidden" name="status" value=2>
                        <tr>
                            <td>NIM</td>
                            <td>
                                <input type="text" name="nim">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="nama_lengkap" maxlength="50" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>
                                <input type="text" name="nama_panggilan" maxlength="10" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>
                                <input type="text" name="tempat_lahir" maxlength="10" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="date" name="tanggal_lahir" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <input type="text" name="agama" maxlength="10" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="alamat" maxlength="50" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor Telpon</td>
                            <td>
                                <input type="text" name="no_telpon" maxlength="40" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>
                                <input type="number" name="jml_saudara" min="1" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>
                                <input type="number" name="anak_ke" min="1" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>
                                <input type="text" name="kewarganegaraan" maxlength="20" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Sehari-hari</td>
                            <td>
                                <input type="text" name="bahasa" maxlength="20" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Apakah ada Kesehatan yang perlu diperhatikan secara khusus?</td>
                            <td>
                                <select name="kesehatan" id="kesehatan">
                                    <option value="0" selected>Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" id="kesehatan_desk" style="display: none">
                                Kesehatan yang perlu di perhatikan secara khusus
                                <br>
                                <textarea name="kesehatan_desk" rows="10" cols="30"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Apakah ada permasalahan khusus yang perlu diperhatikan?</td>
                            <td>
                                <select name="khusus" id="khusus">
                                    <option value="0" selected>Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" id="khusus_desk" style="display: none">
                                Permasalahan yang perlu di perhatikan secara khusus
                                <br>
                                <textarea name="khusus_desk" rows="10" cols="30"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Kebiasaan / Kesenangan / Ketidaksenangan anak
                                <br>
                                <textarea name="kebiasaan" rows="10" cols="30">
                                    -
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Tinggal bersama</td>
                            <td>
                                <input type="radio" name="tinggal" value="1"> Keluarga sendiri
                                <br>
                                <input type="radio" name="tinggal" value="2"> Bersama Keluarga lain
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Penghuni Rumah(Dewasa)</td>
                            <td>
                                <input type="text" name="penghuni_dewasa" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Penghuni Rumah(Anak-anak)</td>
                            <td>
                                <input type="text" name="penghuni_sebaya" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ayah</td>
                            <td>
                                <input type="radio" name="hub_ayah" value="1" > Kurang Erat
                                <br>
                                <input type="radio" name="hub_ayah" value="2" > Cukup Erat
                                <br>
                                <input type="radio" name="hub_ayah" value="3" > Sangat Erat
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan Ibu</td>
                            <td>
                                <input type="radio" name="hub_ibu" value="1" > Kurang Erat
                                <br>
                                <input type="radio" name="hub_ibu" value="2" > Cukup Erat
                                <br>
                                <input type="radio" name="hub_ibu" value="3" > Sangat Erat
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Pergaulan</td>
                            <td>
                                <input type="radio" name="pergaulan_sebaya" value="1" > Sangat Kurang
                                <br>
                                <input type="radio" name="pergaulan_sebaya" value="2" > Kurang
                                <br>
                                <input type="radio" name="pergaulan_sebaya" value="3" > Cukup
                                <br>
                                <input type="radio" name="pergaulan_sebaya" value="4" > Banyak
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Imunisasi</td>
                            <td>
                                <input type="radio" name="imunisasi" value="0" > Belum Lengkap
                                <br>
                                <input type="radio" name="imunisasi" value="1" > Lengkap
                                <br>
                            </td>
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
                            <input type="text" name="nama_ayah" maxlength="50" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ayah" maxlength="20" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ayah" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ayah" maxlength="10" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ayah" maxlength="40" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ayah" maxlength="10" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ayah" maxlength="20" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ayah" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ayah" maxlength="50" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ayah" maxlength="20" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><b>Data Ibu</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>
                            <input type="text" name="nama_ibu" maxlength="50" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir_ibu" maxlength="20" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir_ibu" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama_ibu" maxlength="10" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>
                            <input type="text" name="no_telpon_ibu" maxlength="40" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>
                            <input type="text" name="pendidikan_ibu" maxlength="10" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <input type="text" name="pekerjaan_ibu" maxlength="20" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>
                            <input type="number" name="penghasilan_ibu" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>
                            <input type="text" name="alamat_kantor_ibu" maxlength="50" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <input type="text" name="kewarganegaraan_ibu" maxlength="20" required>
                        </td>
                    </tr>
                </table>
                
            </div>
            <input type="submit" value="Selesai">
                <?php echo form_close(); ?>
        </div>
    </div>
</body>

</html>