<?php 

if (isset($_POST['tombol'])) {
	echo "tombol OKE..";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form1 oop</title>
</head>

<body>
<form name="form1" action="" method="POST">
<table>
	<tr>
		<td>Harga Barang</td>
		<td><input type="text" name="tHarga" value=""></td>
	</tr>
	<tr>
		<td>Jumlah Barang</td>
		<td><input type="text" name="tJumlah" value=""></td>
	</tr>
	<tr>
		<td>Total Bayar</td>
		<td><input type="text" name="tBayar" value=""></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="tombol" value="HITUNG"></td>
	</tr>
</table>
</form>
</body>
</html>