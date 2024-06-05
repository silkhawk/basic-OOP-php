<?php 
include('class/Motor.php');
$honda = new Motor("biru");
$honda->setWarna('hitam');
echo "object itu berwarna ".$honda->getWarna();
 ?>