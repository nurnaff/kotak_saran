<html>
<body>
<?php
include("koneksi.php");
	$tgl2=$_POST['tanggal'];
	$nol2=$_POST['noloket'];
	$noso2=3;
	$noip2=$_POST['nopeg'];
	$jwb2=$_POST['jawab'];
	$sql2=mysql_query("INSERT INTO jawaban VALUES('$tgl2','$nol2','$noso2','$noip2','$jwb2')");
?>
<p>Terima Kasih Telah Menjawab Kotak Saran Kami <br>
Selamat Berkunjung Kembali di PT POS Indonesia <br>
Kami Siap Melayani Anda </p><br>
<form method="post" action="indek.php">
<input type="submit" value="Kembali" />
</form>
</body>
</html>