<?php 
include ('class/Buah.php');
//nama file latihan3.php
//lokasi di folder oop
$pisang = new Buah();

$pisang->setNama('ambon');
$pisang->setWarna('Hijau');
$pisang->setRasa('Kalek');

echo "Nama pisang adalah "$pisang->getNama();
echo "Warna pisang adalah "$pisang->getWarna();
echo "Rasa pisang adalah "$pisang->getRasa();




 ?>

 CONTOH TUGAS