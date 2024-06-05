<?php 
include('class/mangga.php');
//mengakses contruktur anak(mangga.php)
$mangga_golek = new Mangga("mangga golek","hijau","100");

$mangga_golek->setRasa("manis");//mengakses properties bapak
$mangga_golek->setBentuk("oval");//mengakses properties anak

echo "Nama mangga :".$mangga_golek->getNama();//mengakses properties bapak
echo "<br>";
echo "bentuk mangga :".$mangga_golek->getBentuk();//mengakses properties anak
echo "<br>";
echo "warna mangga :".$mangga_golek->getWarna();//mengakses properties bapak
echo "<br>";
echo "berat mangga :".$mangga_golek->getBerat();//mengakses properties anak
echo "<br>";


 ?>