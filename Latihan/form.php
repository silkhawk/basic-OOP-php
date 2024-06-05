<?php 
$bayar = 0;
$harga = 0;
$jumlah = 0;
if (isset($_POST['tombol'])) {
	
	$harga = $_POST['hrg'];
	$jumlah = $_POST['jml'];
	$bayar = $harga * $jumlah;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form hitung</title>
</head>
<body>
<form name="form1" action="" method="POST">
	<table border="0" width="400">
		<tr>
			<td>HARGA</td>
			<td><input type="text" name="hrg" value="<?php echo $harga ;?>"></td>
		</tr>
		

		<tr>
			<td>JUMLAH</td>
			<td><input type="text" name="jml" value="<?php echo $jumlah ;?>"></td>
		</tr>

		<tr>
			<td>BAYAR</td>
			<td><input type="text" name="byr" value="<?php echo $bayar ;?>"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="HITUNG" name="tombol"></td>
		</tr>
	</table>

</form>
</body>
</html>