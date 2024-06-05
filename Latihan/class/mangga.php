<?php 
include('buah.php');

class Mangga extends Buah {

  protected  $berat; //properties
  protected  $bentuk;

  public function __construct($nama,$warna,$berat) {
      $this->nama = $nama;
      $this->warna = $warna;
      $this->berat = $berat;
    }
  public function getBerat(){
    return $this->berat;
  } 
   public function setBentuk($bentuk){
    $this->bentuk=$bentuk;
  }

  public function getBentuk(){
    return $this->bentuk;
  } 

  public function pesan() {
    echo "Apakah saya buah atau mangga ? ";
  }
  
}

 ?>