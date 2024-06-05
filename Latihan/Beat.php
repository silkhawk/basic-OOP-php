<?php 
include('class/Matic.php');

$beat = new Matic("Merah");
$beat->setCc('110');
$beat->setMerk('scupi');

echo "warna motor saya adalah ".$beat->getWarna();
echo "<br>";
echo "cc motor saya adalah ".$beat->getCc();
echo "<br>";
echo "merk motor saya adalah ".$beat->getMerk();




 ?>