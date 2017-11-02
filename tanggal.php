<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("d-m-Y", $tanggal);
echo $tglsekarang;
?>
