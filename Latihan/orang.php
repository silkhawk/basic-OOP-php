<?php 
include('class/Manusia.php');

$orang1 = new Manusia("Wanita","Putih");

echo "Jenis kelamin orang1 adalah ".$orang1->getJk()."<br>";
echo "warna orang1 adalah ".$orang1->getWarna();



 ?>