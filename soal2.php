<html>
<body>
<?php
	include("koneksi.php");
	$tgl=$_POST['tanggal'];
	$nol=$_POST['noloket'];
	$noso=1;
	$noip=$_POST['nopeg'];
	$jwb=$_POST['jawab'];
	$sql=mysql_query("INSERT INTO jawaban VALUES('$tgl','$nol','$noso','$noip','$jwb')");
    $qryTampil2=mysql_query("select * from loket Where NO='$nol'"); 
    $dataTampil2=mysql_fetch_array($qryTampil2); 
    $qryTampil3=mysql_query("select * from pertanyaan Where NOS='2'"); 
    $dataTampil3=mysql_fetch_array($qryTampil3);
 ?>
<form method="post" action="soal3.php"> 
      <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000"> 
        <tr bgcolor="#FFFFCC"> 
          <td height="50" colspan="2"><div align="center">Pertanyaan Pertama</div></td> 
        </tr>  
    <tr>
	    <td colspan=2 align="center">
			<input name="tanggal" type="text" value="<?php echo $tgl; ?>"></td> </tr>
	<tr bgcolor="#FFFFFF"> 
          <td height="40">No Loket </td> 
          <td>: 
          <input name="noloket" type="text" value="<?php echo $dataTampil2['NO']; ?>"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">No Pegawai</td> 
          <td>: 
          <input name="nopeg" type="text" value="<?php echo $dataTampil2['NIK']; ?>"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">Pertanyaan</td> 
          <td> <?php echo $dataTampil3['SOAL']; ?></td> 
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td>Jawab</td>
			<td><select name="jawab">
			<option value="0">-pilih-</option>
			<option value="ramah">Ramah</option>
			<option value="tidak ramah">Tidak Ramah</option> </select></td>
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td colspan=2><input type="submit" name="inputa" value="Lanjut" /></td>
    </tr> 
    </table> 
    </form>  
</body>
</html>