<?php 

include('class/Diskon.php');

$bayar = new Diskon();
$bayar->setHarga(1000);
$bayar->setJumlah(10);
$bayar->setDiskon(50);


echo "harga barang : ".$bayar->getHarga();
echo "<br>";
echo "jumlah barang : ".$bayar->getJumlah();
echo "<br>";
echo "Diskon : ".$bayar->getDiskon();
echo "<br>";
echo "Total Harga :".$bayar->getBayar();
echo "<br>";
echo "Total Potongan : ".$bayar->getPotongan();
echo "<br>";
echo "Total Bayar : ".$bayar->getTB();
echo "<br>";

 ?>