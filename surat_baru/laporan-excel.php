<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan-surat-laporan.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

  session_start();
  error_reporting(0);
  include "koneksi.php";
?>
<head>
<title>Print - Semua Data Surat Laporan</title>
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
    <td align="center" colspan="12"><strong>PENGARSIPAN SURAT-SURAT<br>
    									   DIVISI PENGEMBANGTEKNOLOGI INFORMASI <br>
    									   </strong></td>
  </tr>
  <tr>
     <td align="center" colspan="12"><p>Jln. MARGONDA RAYA  NO 39 <br> Telp.(021) 96670860, Kode Pos. 12345</p></td>
  </tr>   
</table>
<br><br>
<?php	
	echo "<table width=100% border=1>
					<tr bgcolor='yellow'>
                        <th width=30px>No</th>
                        <th>Pengirim</th>
                        <th width='100px'>Tanggal Surat</th>
                        <th width='130px'>Masuk Agenda</th>
                        <th>No Surat</th>
                        <th>Perihal</th>
                        <th>Lokasi Arsip</th>
                        <th>Penyelesaian</th>
                    </tr>
                    </thead>
                    <tbody>";
                        $laporan = mysql_query("SELECT * FROM laporan ORDER BY id_laporan ASC");
                        $no = 1;
                        while ($i = mysql_fetch_array($laporan)){
                            echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td>$i[pengirim]</td>
                                    <td>".tgl_indo($i[tanggal_surat])."</td>
                                    <td>".tgl_indo($i[masuk_agenda])."</td>
                                    <td>$i[no_surat]</td>
                                    <td>$i[id_perihal]</td>
                                    <td>$i[lokasi_arsip]</td>
                                    <td>$i[disposisi]</td>
                                 </tr>";
                            $no++;
                        }
?>

<table width=100%>
  <tr>
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
      ( Ali Nurdin S.Kom )<br /><br /><br />
	</td>
  </tr>
</table> 
