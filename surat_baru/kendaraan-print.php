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
                        <th width=30px>No</th>
                        <th>Jenis</th>
                        <th>Merek</th>
                        <th>Type</th>
                        <th>No Polisi</th>
                        <th>No Rangka</th>
                        <th>No Mesin</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Kondisi Kendaraan</th>
                        <th>Lokasi Kendaraan</th>
                        <th>SK Pemegang</th>
                        <th>Nama Pemegang</th>
                        <th>Kapasitas Mesin</th>
                        <th>Keberadaan BPKB</th>
                        <th>Nomor BPKB</th>
                        <th>Posisi BPKB</th>
                        <th>Keberadaan Kendaraan</th>
                        <th>Asal Usul</th>
                        <th>Sumber Dana</th>
                        <th>Harga</th>
                        <th>keterangan</th>
                        
                    </tr>
                    </thead>
                    <tbody>";
                        $kendaraan = mysql_query("SELECT * FROM kendaraan ORDER BY id_kendaraan ASC");
                        $no = 1;
                        while ($i = mysql_fetch_array($kendaraan)){
                            echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td>$i[jenis_kendaraan]</td>
                                    <td>$i[merk]</td>
                                    <td>$i[type]</td>
                                    <td>$i[nomor_polisi]</td>
                                    <td>$i[nomor_rangka]</td>
                                    <td>$i[nomor_mesin]</td>
                                    <td>$i[warna]</td>
                                    <td>$i[tahun]</td>
                                    <td>$i[kondisi_kendaraan]</td>
                                    <td>$i[lokasi_kendaraan]</td>
                                    <td>$i[sk_pemegang]</td>
                                    <td>$i[nama_pemegang]</td>
                                    <td>$i[kapasitas_mesin]</td>
                                    <td>$i[keberadaan_bpkb]</td>
                                    <td>$i[nomor_bpkb]</td>
                                    <td>$i[posisi_bpkb]</td>
                                    <td>$i[keberadaan_kendaraan]</td>
                                    <td>$i[asal_usul]</td>
                                    <td>$i[sumber_dana]</td>
                                    <td>$i[harga]</td>
                                    <td>$i[keterangan]</td>
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