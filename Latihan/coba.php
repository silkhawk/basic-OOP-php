<?php 
include('class/Hitung.php');


$beli = new Hitung();


$beli->setHarga(500);
$beli->setJumlah(3);


echo "Harga : ".$beli->getHarga();
echo "<br>";
echo "Jumlah : ".$beli->getJumlah();
echo "<br>";
echo "Bayar :".$beli->getBayar();
echo "<br>";







 ?>