<html>
<body>
<?php
include("koneksi.php");
$noloket=$_POST['loket'];
$qr=mysql_query("SELECT * FROM loket WHERE NO='$noloket'");
$hqr=mysql_fetch_array($qr);
$noik=$hqr['NIK'];
$ketr=$hqr['KETERANGAN'];
$qr1=mysql_query("SELECT * FROM pegawai WHERE NIK='$noik'");
$hqr1=mysql_fetch_array($qr1);
?>
<form method="post" action="laporanbulanan.php">
<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" >
  <tr bgcolor="#CCFFCC">
    <td colspan="3"><div align="center"><strong>No Loket</strong></div></td>
	<td colspan="4"><div align="center"><strong><?php echo $noloket; ?></strong></div></td> </tr>
  <tr bgcolor="#CCFFCC">
	<td colspan="3"><div align="center"><strong>No Pegawai</strong></div></td>
	<td colspan="4"><div align="center"><strong><?php echo $hqr1['NIK']; ?></strong></div></td> </tr>
  <tr bgcolor="#CCFFCC">
    <td colspan="3"><div align="center"><strong>Nama Pegawai</strong></div></td>
	<td colspan="4"><div align="center"><strong><?php echo $hqr1['NAMA']; ?></strong></div></td> </tr>
  <tr bgcolor="#CCCCCC">
    <td><div align="center"><strong>Tanggal</strong></div></td>
	<td><div align="center"><strong>Cepat</strong></div></td>
    <td><div align="center"><strong>Tidak Cepat</strong></div></td>
	<td><div align="center"><strong>Ramah</strong></div></td>
    <td><div align="center"><strong>Tidak Ramah</strong></div></td>
	<td><div align="center"><strong>Puas</strong></div></td>
    <td><div align="center"><strong>Tidak Puas</strong></div></td>
  </tr>
<?php
$qryTampil=mysql_query("SELECT * FROM laporan WHERE NO='$noloket'");
while ($dataTampil=mysql_fetch_array($qryTampil)) {
?>
  <tr bgcolor="#FFFFFF">
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
<p>Kembali Ke Laporan Bulanan<br>
<input type="submit" name="kembali" value="Kembali"></p>
</form>
</body>
</html>