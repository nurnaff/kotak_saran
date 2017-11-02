<html>
<body>
<?php
	include("koneksi.php");
	$lok=$_POST['loket'];
    $qryTampil=mysql_query("select * from loket Where NO='$lok'"); 
    $dataTampil=mysql_fetch_array($qryTampil); 
	date_default_timezone_set('Asia/Jakarta');
	$tanggal= mktime(date("m"),date("d"),date("Y"));
	$tglsekarang = date("d-m-Y", $tanggal);
	$qryTampil1=mysql_query("select * from pertanyaan Where NOS='1'"); 
    $dataTampil1=mysql_fetch_array($qryTampil1);
 ?>
<form method="post" action="soal2.php"> 
      <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000"> 
        <tr bgcolor="#FFFFCC"> 
          <td height="50" colspan="2"><div align="center">Pertanyaan Pertama</div></td> 
        </tr>  
    <tr>
	    <td colspan=2 align="center">
			<input name="tanggal" type="text" value="<?php echo $tglsekarang; ?>"></td> </tr>
	<tr bgcolor="#FFFFFF"> 
          <td height="40">No Loket </td> 
          <td>: 
          <input name="noloket" type="text" value="<?php echo $dataTampil['NO']; ?>"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">No Pegawai</td> 
          <td>: 
          <input name="nopeg" type="text" value="<?php echo $dataTampil['NIK']; ?>"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">Pertanyaan</td> 
          <td> <?php echo $dataTampil1['SOAL']; ?></td> 
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td>Jawab</td>
			<td><select name="jawab">
			<option value="0">-pilih-</option>
			<option value="cepat">Cepat</option>
			<option value="tidak cepat">Tidak Cepat</option> </select></td>
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td colspan=2><input type="submit" name="input" value="Lanjut" /></td>
    </tr> 
    </table> 
    </form>  
</body>
</html>