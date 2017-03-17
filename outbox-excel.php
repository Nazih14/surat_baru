<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan-surat-keluar.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

  session_start();
  error_reporting(0);
  include "koneksi.php";
?>
<head>
<title>Print - Semua Data Surat Keluar</title>
<style>
.input1 {
	height: 20px;
	font-size: 12px;
	padding-left: 5px;
	margin: 5px 0px 0px 5px;
	width: 97%;
	border: none;
	color: red;
}
#kiri{
width:50%;
float:left;
}

#kanan{
width:50%;
float:right;
padding-top:20px;
margin-bottom:9px;
}

td { border:1px solid #000; }
th { border:2px solid #000; }
</style>
</head>
<body onload="window.print()">
<table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" colspan="8"><strong>PENGARSIPAN SURAT-SURAT<br>
    									   DIVISI PENGEMBANG TEKNOLOGI INFORMASI<br>
    									  </strong></td>
  </tr>
  <tr>
    <td align="center" colspan="8"><p>Jln. MARGONDA RAYA  NO 39 <br> Telp.(021) 96670860, Kode Pos. 12345</p></td>
  </tr>   
</table>
<br><br>
<?php	
	echo "<table width=100% border=1>
					<tr bgcolor='green'>
                        <th width=30px>No</th>
                        <th>No. Surat</th>
                        <th>Perihal</th>
                        <th>Bidang</th>
                        <th>Tujuan Surat</th>
                        <th width='100px'>Tanggal Terima</th>
                        <th>Penerima</th>
                        <th>Lokasi Arsip</th>
                    </tr>
                    </thead>
                    <tbody>";
                      if ($_SESSION[unit] == '0'){
                        $inbox = mysql_query("SELECT * FROM outbox ORDER BY id_outbox ASC");
                      }else{
                        $inbox = mysql_query("SELECT * FROM outbox where unit_kerja='$_SESSION[unit]' ORDER BY id_outbox ASC");
                      }
                        $no = 1;
                        while ($i = mysql_fetch_array($inbox)){
                            echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td>$i[no_surat]</td>
                                    <td>$i[id_perihal]</td>
                                    <td>$i[bidang]</td>
                                    <td>$i[tujuan_surat]</td>
                                    <td>".tgl_indo($i[tanggal_surat])."</td>
                                    <td>$i[nama_penerima]</td>
                                    <td>$i[lokasi_arsip]</td>
                                 </tr>";
                            $no++;
                        }
?>

<table width=100%>
  <tr>
     <td width="230" align="center">Mengetahui <br> Project Manager</td>
	<td width="230" align="center">Mengetahui <br> Desain</td>
	<td width="230" align="center">Mengetahui <br> Analys</td>
	<td width="230" align="center">Mengetahui <br> Prog 1</td>
	<td width="230" align="center">Mengetahui <br> Prog 2</td>>
  </tr>
  <tr>
    <td align="center"><br /><br /><br /><br /><br />
      ( Suhandi S.Kom )<br /><br /><br /></td>
	<td align="center"><br /><br /><br /><br /><br />
      ( Nazih S.Kom )<br /><br /><br /></td>
	<td align="center"><br /><br /><br /><br /><br />
      ( Mustopa S.Kom )<br /><br /><br /></td>
	<td align="center"><br /><br /><br /><br /><br />
      ( Dwi Prastowo S.Kom )<br /><br /><br /></td>
	<td align="center"><br /><br /><br /><br /><br />
      ( Ali Nurdin S.Kom )<br /><br /><br /></td>
  </tr>
</table> 
