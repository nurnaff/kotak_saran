<html>
<body>
<form method="post" action="tampillaporan.php">
<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" >
  <tr bgcolor="#CCFFFF">
    <td><div align="center"><strong>No Loket</strong></div></td>
	<td><div align="center"><strong>No Pegawai</strong></div></td>
	<td><div align="center"><strong>Tanggal</strong></div></td>
    <td><div align="center"><strong>Cepat</strong></div></td>
    <td><div align="center"><strong>Tidak Cepat</strong></div></td>
	<td><div align="center"><strong>Ramah</strong></div></td>
    <td><div align="center"><strong>Tidak Ramah</strong></div></td>
	<td><div align="center"><strong>Puas</strong></div></td>
    <td><div align="center"><strong>Tidak Puas</strong></div></td>
  </tr>
<?php
include("koneksi.php");
	$tgl=$_POST['tanggal'];
	$lok=$_POST['noloket'];
	$qr=mysql_query("SELECT * FROM loket WHERE NO='$lok'");
	$hsl=mysql_fetch_array($qr);
	$nopeg=$hsl["NIK"];
	$cpt='cepat';
	$tcpt='tidak cepat';
	$rmh='ramah';
	$trmh='tidak ramah';
	$pus='puas';
	$tpus='tidak puas';
	$soal1='1';
	$soal2='2';
	$soal3='3';
	$qr1=mysql_query("SELECT COUNT(*) AS jumc FROM jawaban WHERE TANGGAL='$tgl' AND NO='$lok' AND NOS='$soal1' AND jawab='$cpt'");
	$hsl1=mysql_fetch_assoc($qr1);
	$jum1=$hsl1['jumc'];
	$qr2=mysql_query("SELECT COUNT(*) AS jumtc FROM jawaban WHERE TANGGAL='$tgl' AND NO='$lok' AND NOS='$soal1' AND jawab='$tcpt'");
	$hsl2=mysql_fetch_assoc($qr2);
	$jum2=$hsl2['jumtc'];
	$qr3=mysql_query("SELECT COUNT(*) AS jumr FROM jawaban WHERE TANGGAL='$tgl' AND NO='$lok' AND NOS='$soal2' AND jawab='$rmh'");
	$hsl3=mysql_fetch_assoc($qr3);
	$jum3=$hsl3['jumr'];
	$qr4=mysql_query("SELECT COUNT(*) AS jumtr FROM jawaban WHERE TANGGAL='$tgl' AND NO='$lok' AND NOS='$soal2' AND jawab='$trmh'");
	$hsl4=mysql_fetch_assoc($qr4);
	$jum4=$hsl4['jumtr'];
	$qr5=mysql_query("SELECT COUNT(*) AS jump FROM jawaban WHERE TANGGAL='$tgl' AND NO='$lok' AND NOS='$soal3' AND jawab='$pus'");
	$hsl5=mysql_fetch_assoc($qr5);
	$jum5=$hsl5['jump'];
	$qr6=mysql_query("SELECT COUNT(*) AS jumtp FROM jawaban WHERE TANGGAL='$tgl' AND NO='$lok' AND NOS='$soal3' AND jawab='$tpus'");
	$hsl6=mysql_fetch_assoc($qr6);
	$jum6=$hsl6['jumtp'];
	$simpan=mysql_query("INSERT INTO laporan VALUES('$lok','$nopeg','$tgl','$jum1','$jum2','$jum3','$jum4','$jum5','$jum6')");
$qryTampil=mysql_query("SELECT * FROM laporan");
while ($dataTampil=mysql_fetch_array($qryTampil)) {
?>
  <tr bgcolor="#FFFFFF">
    <td><?php echo $dataTampil['NO'] ; ?></td>
	<td><?php echo $dataTampil['NIK']; ?></td>
	<td><?php echo $dataTampil['TANGGAL']; ?></td>
    <td><?php echo $dataTampil['CEPAT']; ?></td>
	<td><?php echo $dataTampil['TIDAK_CEPAT']; ?></td>
	<td><?php echo $dataTampil['RAMAH']; ?></td>
	<td><?php echo $dataTampil['TIDAK_RAMAH']; ?></td>
	<td><?php echo $dataTampil['PUAS']; ?></td>
	<td><?php echo $dataTampil['TIDAK_PUAS']; ?></td>
	</tr>
<?php } ?>
</table> 
<p>Kembali Ke Simpan Laporan <br>
<input type="submit" name="kembali" value="Kembali"></p>
</form>
</body> </html>