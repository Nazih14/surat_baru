 <?php 
    if ($_GET[aksi]==''){
?>
        <h4 style='padding-top:15px'>Semua Data Surat Permintan Barang </h4>
            <!-- Basic Data Tables Example -->
            <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php if ($_SESSION[level]=='user_admin'){ ?>
                        <a class='btn btn-primary' href='index.php?page=minta&aksi=tambah'><i class='fa fa-plus'></i> Tambah Surat Permintan Barang</a>
                        <a class='btn btn-info' target='BLANK' href='minta-print.php'><i class='fa fa-print'></i> Print Surat Permintan Barang</a>
                        <a class='btn btn-success' href='minta-excel.php'><i class='fa fa-file'></i> Export ke Excel</a>
                    <?php }elseif ($_SESSION[level]=='user_input'){ ?>
                        <a class='btn btn-primary' href='index.php?page=minta&aksi=tambah'><i class='fa fa-plus'></i> Tambah Surat Permintan Barang</a>
                    <?php } ?>
                </div>

                <div class="panel-body">
                 <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead  class='alert-success'>
                    <tr>
                        <th>No</th>
                        <th>No. Surat</th>
                        <th width='100px'>Tanggal Surat</th>
                        <th>Tujuan Surat</th>
                        <th>Perihal</th>
                        <th>Tembusan</th>
                        <th>Lamp.</th>
                        <th>Status</th>
                        <th width=40px>Unit</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                      if ($_SESSION[unit]=='0'){
                        $outbox = mysql_query("SELECT * FROM minta_b ORDER BY id_minta_b ASC");
                      }else{
                        $outbox = mysql_query("SELECT * FROM minta_b where unit_kerja='$_SESSION[unit]' ORDER BY id_minta_b ASC");
                      }
                        $no = 1;
                        while ($i = mysql_fetch_array($outbox)){
                            echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td>$i[no_surat]</td>
                                    <td>".tgl_indo($i[tanggal_surat])."</td>
                                    <td>$i[tujuan_surat]</td>
                                    <td>$i[id_perihal]</td>
                                    <td>$i[tembusan]</td>
                                    <td>$i[jumlah_lampiran]</td>
                                    <td>$i[status]</td>
                                    <td>$i[unit_kerja]</td>";
                                        if ($_SESSION[level]=='user_admin'){ 
                                            echo "<td style='width:165px' class='text-right'><a class='btn' href='index.php?page=minta&aksi=detail&id=$i[id_minta_b]' title='Lihat Detail Surat ini'><i class='fa fa-folder-open'></i></a>
                                                  <a class='btn' target='BLANK' href='minta-print-satu.php?id=$i[id_minta_b]' title='Print Surat ini'><i class='fa fa-print'></i></a>
                                                  <a class='btn' href='index.php?page=minta&aksi=edit&id=$i[id_minta_b]' title='Edit Data Surat ini'><i class='fa fa-pencil-square-o'></i></a>
                                                  <a class='btn' href='index.php?page=minta&aksi=hapus&id=$i[id_minta_b]' title='Hapus Surat ini' onclick=\"return confirm('Apakah anda Yakin Data ini Dihapus?')\"><i class='fa fa-trash-o'></i></a>";
                                        }elseif ($_SESSION[level]=='user_input'){ 
                                            echo "<td style='width:90px' class='text-right'><a class='btn' href='index.php?page=minta&aksi=detail&id=$i[id_minta_b]' title='Lihat Detail Surat ini'><i class='fa fa-folder-open'></i></a>
                                                  <a class='btn' href='index.php?page=minta&aksi=edit&id=$i[id_minta_b]' title='Edit Data Surat ini'><i class='fa fa-pencil-square-o'></i></a>";
                                        }else{
                                            echo "<td style='width:50px' class='text-right'><a class='btn' href='index.php?page=minta&aksi=detail&id=$i[id_minta_b]' title='Lihat Detail Surat ini'><i class='fa fa-folder-open'></i></a>";
                                        }
                                    echo "</td>
                                 </tr>";
                            $no++;
                        }
                    ?>

                    </tbody>
                    </table>
                </div>
            </div>
            </div>
            <!-- /Basic Data Tables Example --> 


<?php 
}elseif ($_GET[aksi]=='hapus'){ 
    mysql_query("DELETE FROM minta_b where id_minta_b='$_GET[id]'");
    echo "<script>window.alert('Data Surat Keluar Berhasil Di Hapus.');
                                window.location='minta'</script>";

}elseif ($_GET[aksi]=='tambah'){ 
    if (isset($_POST[simpan])){
        if ($_SESSION[unit] == '0'){
            $unit = $_POST[unit];
        }else{
            $unit = $_SESSION[unit];
        }
        $dir_gambar = 'surat_minta/';
            $filename = basename($_FILES['i']['name']);
            $uploadfile = $dir_gambar . $filename;
            $tanggaleks = date("Y-m-d H:i:s");
                if ($filename != ''){
                    if (move_uploaded_file($_FILES['i']['tmp_name'], $uploadfile)) {            
                         mysql_query("INSERT INTO minta_b (no_surat, 
                                                                  tanggal_surat, 
                                                                  tujuan_surat, 
                                                                  perihal, 
                                                                  tembusan, 
                                                                  jumlah_lampiran, 
                                                                  isi_perihal,
                                                                  penandatanganan, 
                                                                  status, 
                                                                  upload_file,
                                                                  waktu_eksekusi, 
                                                                  id_user,
                                                                  unit_kerja)           
                                                           VALUES('$_POST[a]',
                                                                  '$_POST[b]',
                                                                  '$_POST[c]',
                                                                  '$_POST[d]',
                                                                  '$_POST[e]',
                                                                  '$_POST[f]',
                                                                  '$_POST[g]',
                                                                  '$_POST[h]',
                                                                  '$_POST[j]',
                                                                  '$filename',
                                                                  '$tanggaleks',
                                                                  '$_SESSION[login]',
                                                                  '$unit')");
                                       
                        echo "<script>window.alert('Sukses Menambahkan Data Surat Keluar .');
                                window.location='minta'</script>";
                    }else{
                        echo "<script>window.alert('Gagal Menambahkan Data Surat Keluar.');
                                window.location='index.php?page=minta&aksi=tambah'</script>";
                    }
                }else{
                       mysql_query("INSERT INTO minta_b (no_surat, 
                                                                  tanggal_surat, 
                                                                  tujuan_surat, 
                                                                  perihal, 
                                                                  tembusan, 
                                                                  jumlah_lampiran, 
                                                                  perihal,
                                                                  penandatanganan, 
                                                                  status, 
                                                                  waktu_eksekusi, 
                                                                  id_user,
                                                                  unit_kerja)           
                                                           VALUES('$_POST[a]',
                                                                  '$_POST[b]',
                                                                  '$_POST[c]',
                                                                  '$_POST[d]',
                                                                  '$_POST[e]',
                                                                  '$_POST[f]',
                                                                  '$_POST[g]',
                                                                  '$_POST[h]',
                                                                  '$_POST[j]',
                                                                  '$tanggaleks',
                                                                  '$_SESSION[login]',
                                                                  '$unit')");
                                       
                        echo "<script>window.alert('Sukses Menambahkan Data Surat Keluar .');
                                window.location='minta'</script>";
                }
    }
?>

                <h4 style='padding-top:15px'></h4>
            <!-- Basic Data Tables Example -->
            <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading"><strong>Tambahkan Data Surat Permintaan Barang</strong></div>
                <div class="panel-body">
                    <form action='' class="form-horizontal" method="POST" data-validate="parsley" enctype='multipart/form-data'>      

                    	<div class="form-group">
                            <label class="col-lg-2 control-label">No Surat</label>
                            <div class="col-lg-6">
                                <input type="text" name="a" placeholder="" data-required="true" class="bg-focus form-control ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal Surat</label>
                            <div class="col-lg-8">
                            <input type="text" class="combodate form-control" data-format="YYYY-MM-DD" data-template="D  MMM  YYYY" name="b" value="<?php echo date("Y-m-d"); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Tujuan Surat</label>
                            <div class="col-lg-9">
                            <input type="text" name="c" placeholder="Masukkan Tujuan Surat ..." class="bg-focus form-control" data-required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Perihal</label>
                            <div class="col-lg-8">
                            <textarea placeholder="" name='d' rows="6" class="textarea form-control" data-trigger="keyup"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Tembusan</label>
                            <div class="col-lg-6">
                            <input type="text" name="e" placeholder="" class="bg-focus form-control" data-required="true">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Jumlah Lampiran</label>
                            <div class="col-lg-3">
                            <input type="text" name="f" placeholder="" class="bg-focus form-control" data-required="true">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Isi Perihal</label>
                            <div class="col-lg-5">
                            <input type="text" name="g" placeholder="" class="bg-focus form-control" data-required="true">
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Penandatangan</label>
                            <div class="col-lg-7">
                            <input type="text" name="h" placeholder="" class="bg-focus form-control" data-required="true">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Cari File</label>
                            <div class="col-lg-10">
                            <input type="file" name="i" title="Pilih File" class="btn-success btn-small"> 
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Status</label>
                            <div class="col-lg-4">
                            <input type="text" name="j" placeholder="" class="bg-focus form-control" data-required="true">
                            </div>
                        </div>

                        <?php if ($_SESSION[unit] == '0'){ ?>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Unit Kerja</label>
                            <div class="col-lg-4">
                            <select name='unit' class="form-control">
                                <option value=''>- Pilih Unit Kerja -</option>
                                <option value='B'>Unit Kerja B</option>
                                <option value='C'>Unit Kerja C</option>
                                <option value='D'>Unit Kerja D</option>
                                <option value='E'>Unit Kerja E</option>
                            </select>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="form-group">
                            <div class="col-lg-9 pull-right">    
                            <button type="submit" name='simpan' class="btn btn-info">Simpan Data</button>                  
                            <button type="reset" class="btn btn-default">Reset</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
<?php    
}elseif ($_GET[aksi]=='edit'){ 
    $e = mysql_fetch_array(mysql_query("SELECT * FROM minta_b where id_minta_b='$_GET[id]'"));
    if (isset($_POST[update])){
    	    $dir_gambar = 'surat_minta/';
            $filename = basename($_FILES['i']['name']);
            $uploadfile = $dir_gambar . $filename;
            $tanggaleks = date("Y-m-d H:i:s");
                if ($filename != ''){
                    if (move_uploaded_file($_FILES['i']['tmp_name'], $uploadfile)) {            
                         mysql_query("UPDATE minta_b SET no_surat              = '$_POST[a]',
                                                                  tanggal_surat     = '$_POST[b]',
                                                                  tujuan_surat      = '$_POST[c]',
                                                                  perihal           = '$_POST[d]',
                                                                  tembusan          = '$_POST[e]',
                                                                  jumlah_lampiran   = '$_POST[f]',
                                                                  isi_perihal       = '$_POST[g]',
                                                                  penandatanganan   = '$_POST[h]',
                                                                  status            = '$_POST[j]', 
                                                                  upload_file       = '$filename' where id_minta_b='$_GET[id]'");
                                       
                        echo "<script>window.alert('Sukses Update Data Surat Keluar .');
                                window.location='minta'</script>";
                    }else{
                        echo "<script>window.alert('Gagal Update Data Surat Keluar.');
                                window.location='minta'</script>";
                    }
                }else{
                       mysql_query("UPDATE minta_b SET no_surat              = '$_POST[a]',
                                                                  tanggal_surat     = '$_POST[b]',
                                                                  tujuan_surat      = '$_POST[c]',
                                                                  perihal           = '$_POST[d]',
                                                                  tembusan          = '$_POST[e]',
                                                                  jumlah_lampiran   = '$_POST[f]',
                                                                  isi_perihal       = '$_POST[g]',
                                                                  penandatanganan   = '$_POST[h]',
                                                                  status            = '$_POST[j]' where id_minta_b='$_GET[id]'");
                                       
                        echo "<script>window.alert('Sukses Update Data Surat Keluar .');
                                window.location='minta'</script>";
                }
    }
?>

                <h4 style='padding-top:15px'></h4>
            <!-- Basic Data Tables Example -->
            <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading"><strong>Tambahkan Data Surat Permintaan Barang</strong></div>
                <div class="panel-body">
                    <form action='' class="form-horizontal" method="POST" data-validate="parsley" enctype='multipart/form-data'>      

                        <div class="form-group">
                            <label class="col-lg-2 control-label">No Surat</label>
                            <div class="col-lg-6">
                                <input type="text" name="a" placeholder="" data-required="true" class="bg-focus form-control " value="<?php echo $e[no_surat]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal Surat</label>
                            <div class="col-lg-8">
                            <input type="text" class="combodate form-control" data-format="YYYY-MM-DD" data-template="D  MMM  YYYY" name="b" value="<?php echo $e[tanggal_surat]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Tujuan Surat</label>
                            <div class="col-lg-9">
                            <input type="text" name="c" placeholder="Masukkan Tujuan Surat ..." class="bg-focus form-control" data-required="true" value="<?php echo $e[tujuan_surat]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Perihal</label>
                            <div class="col-lg-8">
                            <textarea placeholder="" name='d' rows="6" class="textarea form-control" data-trigger="keyup"><?php echo $e[perihal]; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Tembusan</label>
                            <div class="col-lg-6">
                            <input type="text" name="e" placeholder="" class="bg-focus form-control" data-required="true" value="<?php echo $e[tembusan]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Jumlah Lampiran</label>
                            <div class="col-lg-3">
                            <input type="text" name="f" placeholder="" class="bg-focus form-control" data-required="true" value="<?php echo $e[jumlah_lampiran]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Isi Perihal</label>
                            <div class="col-lg-5">
                            <input type="text" name="g" placeholder="" class="bg-focus form-control" data-required="true" value="<?php echo $e[isi_perihal]; ?>">
                            </div>
                        </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Penandatangan</label>
                            <div class="col-lg-7">
                            <input type="text" name="k" placeholder="" class="bg-focus form-control" data-required="true" value="<?php echo $e[penandatanganan]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Ganti File</label>
                            <div class="col-lg-10">
                            <input type="file" name="m" title="Pilih File" class="btn-success btn-small"> 
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-2 control-label">Status</label>
                            <div class="col-lg-4">
                            <input type="text" name="l" placeholder="" class="bg-focus form-control" data-required="true" value="<?php echo $e[status]; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-9 pull-right">    
                            <button type="submit" name='update' class="btn btn-info">Update Data</button>                  
                            <button type="reset" class="btn btn-default">Reset</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>   
<?php     
}elseif ($_GET[aksi]=='detail'){  
	$e = mysql_fetch_array(mysql_query("SELECT * FROM minta_b where id_minta_b='$_GET[id]'"));
	echo "<h4 style='padding-top:15px'></h4>
            <!-- Basic Data Tables Example -->
            <div class='col-md-12'>
            <div class='panel panel-default'>
            <div class='panel-heading'><strong>Detail Data Surat Masuk</strong></div>
                <div class='panel-body'>
                	<form action='' class='form-horizontal' data-validate='parsley' enctype='multipart/form-data'>
                
                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>No Surat</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                $e[no_surat]
                            </div>
                        </div>

                        <div class='form-group'>
                        <label class='col-lg-2 control-label'>Tujuan Surat</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                            	$e[tujuan_surat]
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Tanggal Surat</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                            	".tgl_indo($e[tanggal_surat])."
                            </div>
                        </div>                                 
                       <div class='form-group'>
                            <label class='col-lg-2 control-label'>Perihal</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                $e[perihal]
                            </div>
                        </div>
                
                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Tembusan</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                 $e[tembusan] <br><br>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>jumlah Lampiran</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                 $e[jumlah_lampiran] <br><br>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Isi Perihal</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                 $e[isi_perihal] <br><br>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Penandatangan</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                 $e[penandatanganan] <br><br>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Status</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                 $e[status] <br><br>
                            </div>
                        </div>
                    <div class='form-group'>
                        <label class='col-lg-2 control-label'>File Surat</label>
                            <div style='border-bottom:1px solid #e3e3e3' class='col-lg-9'>
                                <a href='download_minta.php?file=$e[upload_file]'>Download File Surat</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            </div>";
} 
?>
             <footer id="footer"> 
                <div class="text-center clearfix">
                    <p><small>&copy 2017 - Develop by THE TEAM - http://pos.projek-online.net/</small>
                        <br /><br /> 
                        <a href="https://twitter.com/" class="btn btn-xs btn-circle btn-twitter"><i class="fa fa-twitter"></i></a> 
                        <a href="https://web.facebook.com/" class="btn btn-xs btn-circle btn-facebook"><i class="fa fa-facebook"></i></a> 
                        <a href="https://plus.google.com/" class="btn btn-xs btn-circle btn-gplus"><i class="fa fa-google-plus"></i></a> 
                    </p> 
                </div> 
            </footer>