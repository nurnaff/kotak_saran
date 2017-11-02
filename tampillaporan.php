<html>
<body>
<p>Laporan Harian<br>
<?php
include("koneksi.php");
?>
<form method="post" action="lihathasil.php"> 
      <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000"> 
    <tr>
	    <td>Tulis Tanggal dengan aturan dd-mm-yyyy </td>
		<td><input name="tanggal" type="text"></td> </tr>
	<tr bgcolor="#FFFFFF"> 
            <td>Pilih Loket</td>
			<td><select name="noloket">
			<option value="0">-pilih-</option>
			<option value="1">Loket 1</option>
			<option value="2">Loket 2</option> 
			<option value="3">Loket 3</option>
			<option value="4">Loket 4</option>
			<option value="5">Loket 5</option>
			<option value="6">Loket 6</option></select></td>
    </tr> 
	<tr bgcolor="#FFFFFF"> 
            <td colspan=2><input type="submit" name="input" value="Simpan" /></td>
    </tr> 
    </table> 
    </form>  
</body>
</html>