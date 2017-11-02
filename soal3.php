<html>
<body>
<?php
	include("koneksi.php");
	$tgl1=$_POST['tanggal'];
	$nol1=$_POST['noloket'];
	$noso1=2;
	$noip1=$_POST['nopeg'];
	$jwb1=$_POST['jawab'];
	$sql1=mysql_query("INSERT INTO jawaban VALUES('$tgl1','$nol1','$noso1','$noip1','$jwb1')");
    $qryTampil4=mysql_query("select * from loket Where NO='$nol1'"); 
    $dataTampil4=mysql_fetch_array($qryTampil4); 
    $qryTampil5=mysql_query("select * from pertanyaan Where NOS='3'"); 
    $dataTampil5=mysql_fetch_array($qryTampil5);
 ?>
<form method="post" action="terima.php"> 
      <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000"> 
        <tr bgcolor="#FFFFCC"> 
          <td height="50" colspan="2"><div align="center">Pertanyaan Pertama</div></td> 
        </tr>  
    <tr>
	    <td colspan=2 align="center">
			<input name="tanggal" type="text" value="<?php echo $tgl1; ?>"></td> </tr>
	<tr bgcolor="#FFFFFF"> 
          <td height="40">No Loket </td> 
          <td>: 
          <input name="noloket" type="text" value="<?php echo $dataTampil4['NO']; ?>"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">No Pegawai</td> 
          <td>: 
          <input name="nopeg" type="text" value="<?php echo $dataTampil4['NIK']; ?>"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">Pertanyaan</td> 
          <td> <?php echo $dataTampil5['SOAL']; ?></td> 
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td>Jawab</td>
			<td><select name="jawab">
			<option value="0">-pilih-</option>
			<option value="puas">Puas</option>
			<option value="tidak puas">Tidak Puas</option> </select></td>
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td colspan=2><input type="submit" name="masuk" value="Lanjut" /></td>
    </tr> 
    </table> 
    </form>  
</body>
</html>