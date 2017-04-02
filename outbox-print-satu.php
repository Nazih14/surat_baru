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
    <td align="center"><strong><p style='margin-bottom:-9px'>PENGARSIPAN SURAT-SURAT</p>
	<p style='margin-bottom:-9px'>DIVISI PENGEMBANG TEKNOLOGI INFORMASI </p> 
	</strong></td>
  </tr>
  <tr>
  <tr>
    <td align="center">&nbsp;<p>Jln. MARGONDA RAYA  NO 39 <br> Telp. (021) 96670860, Kode Pos. 12345</p></td>
  </tr>   
</table>
<br><br>
<?php	
$in = mysql_fetch_array(mysql_query("SELECT * FROM outbox where id_outbox='$_GET[id]'"));
  echo "<table>
            <tr>
                <td width='150'>No Surat</td>
                <td width=20px> : </td>
                <td>$in[no_surat]</td>
            </tr>

            <tr>
                <td>Perihal</td>
                <td width=20px> : </td>
                <td>$in[id_perihal]</td>
            </tr>

            <tr>
                <td>Bidang</td>
                <td width=20px> : </td>
                <td>$in[bidang]</td>
            </tr>

            <tr>
                <td>Tujuan Surat</td>
                <td width=20px> : </td>
                <td>$in[tujuan_surat]</td>
            </tr>

            <tr>
                <td>Tanggal Surat</td>
                <td width=20px> : </td>
                <td>".tgl_indo($in[tanggal_surat])."</td>
            </tr>

            <tr>
                <td>Nama Penerima</td>
                <td width=20px> : </td>
                <td>$in[nama_penerima]</td>
            </tr>

            <tr>
                <td>Lokasi Arsip</td>
                <td width=20px> : </td>
                <td>$in[lokasi_arsip]</td>
            </tr>
        </table><br><br>";
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