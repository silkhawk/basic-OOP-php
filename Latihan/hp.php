<?php 

include('class/Diskon.php');


$a = new Diskon();

$a->setHarga(2000000);
$a->setJumlah(1);
$a->setDiskon(20);

echo "harga = ".$a->getHarga();echo "<br>";
echo "jumlah = ".$a->getJumlah();echo "<br>";
echo "Total Harga = ".$a->getBayar();echo "<br>";
echo "====================================";echo "<br>";
echo "Diskon = ".$a->getDiskon();echo "<br>";
echo "Potongan =".$a->getPotongan();echo "<br>";
echo "Total Bayar = ".$a->getTB();





 ?>