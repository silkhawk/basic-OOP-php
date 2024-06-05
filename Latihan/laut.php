<?php 
include ('class/Pantai.php');

$pantai1 = new Pantai("putih","padang");

$pantai1->setPariwisata("air manis");

echo "saya pergi ke <b> ".$pantai1->getLokasi()." </b>ke pantai <b>".$pantai1->getPariwisata()."</b>";

 ?>