<title>Print Data Surat Keluar</title>
<body onload="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
?>
<table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td width="550" align="center">&nbsp;</td>
	<td width="65" rowspan="6"><img src="images/images.png" width="90" height="90"></td>
  </tr>
  <tr>
     <td align="center"><strong><p style='margin-bottom:-9px'>PENGARSIPAN SURAT-SURAT </p> 
					<p style='margin-bottom:-9px'>DIVISI PENGEMBANG TEKNOLOGI INFORMASI </p>
					</strong></td>
  <tr>
     <td align="center">&nbsp;<p>Jln. MARGONDA RAYA  NO 39 <br> Telp. (021) 96670860, Kode Pos. 12345</p></td>
  </tr>   
</table>
<br><br>
<?php	
	echo "<table width=100% border=1>
					<tr bgcolor='green'>
                        <th width=30px>No</th>
                        <th>No. Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Tujuan Surat</th>
                        <th>Isi Ringkas</th>
                        <th>Lokasi Arsip</th>
                        <th>Nama Tanda Tangan</th>
                    </tr>
                    </thead>
                    <tbody>";
                        $inbox = mysql_query("SELECT * FROM outbox_g ORDER BY id_outbox ASC");
                        $no = 1;
                        while ($i = mysql_fetch_array($inbox)){
                            echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td>$i[no_surat]</td>
                                    <td>".tgl_indo($i[tanggal_surat])."</td>
                                    <td>$i[tujuan_surat]</td>
                                    <td>$i[isi_ringkas]</td>
                                    <td>$i[lokasi_arsip]</td>
                                    <td>$i[nama_tanda_tangan]</td>
                                 </tr>";
                            $no++;
                        }
?>

<table width=100%>
  <tr>
    <td colspan="2"></td>
    <td width="286"></td>
  </tr>
  <tr>
    <td width="230" align="center">Mengetahui <br> Project Manager</td>
	<td width="230" align="center">Mengetahui <br> Desain</td>
	<td width="230" align="center">Mengetahui <br> Analys</td>
	<td width="230" align="center">Mengetahui <br> Prog 1</td>
	<td width="230" align="center">Mengetahui <br> Prog 2</td>
  </tr>
  <tr>
     <td align="center"><br /><br /><br /><br />
      ( Suhandi S.Kom )<br /><br /></td>
	<td align="center"><br /><br /><br /><br />
      ( Nazih S.Kom )<br /><br /></td>
	<td align="center"><br /><br /><br /><br />
      ( Mustopa S.Kom )<br /><br /></td>
	<td align="center"><br /><br /><br /><br />
      ( Dwi Prastowo S.Kom )<br /><br /></td>
	<td align="center"><br /><br /><br /><br />
      ( Ali Nurdin S.Kom )<br /><br />
	 </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table> 
</body>