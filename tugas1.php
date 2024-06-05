<?php 

include('class/Hitung.php');

$bayar = new Hitung();
$bayar->setHarga(1000);
$bayar->setJumlah(4);


echo "harga barang : ".$bayar->getHarga();
echo "<br>";
echo "jumlah barang : ".$bayar->getJumlah();
echo "<br>";
echo "Total Bayar :".$bayar->getBayar();

 ?>