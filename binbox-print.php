<title>Print Data Surat Masuk</title>
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
  </tr>
  <tr>
    <td align="center">&nbsp;<p>Jln. MARGONDA RAYA  NO 39 <br> Telp. (021) 96670860, Kode Pos. 12345</p></td>
  </tr>   
</table>
<br><br>
<?php	
	echo "<table width=100% border=1>
					<tr bgcolor='yellow'>
                        <th>No</th>
                        <th>No. Surat</th>
                        <th>Pengirim</th>
                        <th width='100px'>Tanggal Surat</th>
                        <th width='100px'>Masuk Agenda</th>
                        <th>Perihal</th>
                        <th>Isi Perihal A</th>
                        <th>Isi Perihal B</th>
                        <th>Isi Perihal C</th>
                        <th width='50px'>Lamp.</th>
                        <th width='60px'>Status</th>
                        <th width='95px'>Lokasi Arsip</th>";
                        if ($_SESSION[level]=='user_admin'){
                          echo "<th width=40px>Unit</th>";
                        } 
                        echo "
                    </tr>
                    </thead>
                    <tbody>";
                      if ($_SESSION[unit]=='0'){
                        $inbox = mysql_query("SELECT * FROM inbox_b ORDER BY id_inbox_b ASC");
                      }else{
                        $inbox = mysql_query("SELECT * FROM inbox_b where unit_kerja='$_SESSION[unit]' ORDER BY id_inbox_b ASC");
                      } 
                      $no = 1;
                        while ($i = mysql_fetch_array($inbox)){
                            echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td valign=top>$i[no_surat]</td>
                                    <td valign=top>$i[pengirim]</td>
                                    <td valign=top>".tgl_indo($i[tanggal_surat])."</td>
                                    <td valign=top>".tgl_indo($i[tanggal_masuk_agenda])."</td>
                                    <td valign=top>$i[id_perihal]</td>
                                    <td valign=top>$i[isi_disposisi_a]</td>
                                    <td valign=top>$i[isi_disposisi_b]</td>
                                    <td valign=top>$i[isi_disposisi_c]</td>
                                    <td valign=top>$i[jumlah_lampiran]</td>
                                    <td valign=top>$i[status]</td>
                                    <td valign=top>$i[lokasi_arsip]</td>";
                                    if ($_SESSION[level]=='user_admin'){
                                      echo "<th width=40px>$i[unit_kerja]</th>";
                                    } 
                                    echo "
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