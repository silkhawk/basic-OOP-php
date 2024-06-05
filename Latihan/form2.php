<?php 

include('class/Diskon.php');

$form = new Diskon();

if (isset($_POST['tombol'])) {
	
	$harga = $_POST['hrg'];
	$jumlah = $_POST['jml'];
	$diskon = $_POST['dis'];
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
	<title>form hitung</title>
</head>
<body>
<form name="form1" action="" method="POST">
	<table border="0" width="400">
		
		<tr>
			<td>HARGA</td>
			<td><input type="text" name="hrg" value="<?php echo $form->getHarga() ;?>"></td>
		</tr>

		<tr>
			<td>JUMLAH</td>
			<td><input type="text" name="jml" value="<?php echo $form->getJumlah() ;?>"></td>
		</tr>
		<tr>
			<td>DISKON</td>
			<td><input type="text" name="dis" value="<?php echo $form->getDiskon() ;?>"></td>
		</tr>
		<tr>
			<td>TOTAL HARGA</td>
			<td><input type="text" name="byr" value="<?php echo $form->getBayar() ;?>"></td>
		</tr>

		
		<tr>
			<td>POTONGAN</td>
			<td><input type="text" name="pot" value="<?php echo $form->getPotongan() ;?>"></td>
		</tr>

		<tr>
			<td>TOTAL BAYAR</td>
			<td><input type="text" name="pot" value="<?php echo $form->getTB() ;?>"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="HITUNG" name="tombol"></td>
		</tr>
	</table>

</form>
</body>
</html>