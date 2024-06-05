<?php 
include('class/Diskon.php');
$form = new Diskon();
// $harga = 0;
// $jumlah = 0;

if (isset($_POST['tombol'])) {
	$harga = $_POST['tHarga'];
	$jumlah = $_POST['tJumlah'];
	$diskon = $_POST['tDiskon'];
	$form->setHarga($harga);
	$form->setJumlah($jumlah);
	$form->setDiskon($diskon);
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
		<td><input type="text" name="tHarga" value="<?php echo $form->getHarga() ;?>"></td>
	</tr>
	<tr>
		<td>Jumlah Barang</td>
		<td><input type="text" name="tJumlah" value="<?php echo $form->getJumlah() ;?>"></td>
	</tr>
	<tr>
		<td>Diskon</td>
		<td><input type="text" name="tDiskon" value="<?php echo $form->getDiskon() ;?>"></td>
	</tr>
	<tr>
		<td>Total Harga</td>
		<td><input type="text" name="tBayar" value="<?php echo $form->getBayar() ;?>"></td>
	</tr>
	<tr>
		<td>Potongan</td>
		<td><input type="text" name="tBayar" value="<?php echo $form->getPotongan() ;?>"></td>
	</tr>
	<tr>
		<td>Total Bayar</td>
		<td><input type="text" name="tBayar" value="<?php echo $form->getTB() ;?>"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="tombol" value="HITUNG"></td>
	</tr>
</table>
</form>
</body>
</html>