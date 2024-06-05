<?php 
include('class/Hitung.php');

class Diskon extends Hitung{

	public $diskon;
	public $potongan;
	public $total_bayar;

	function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	function getDiskon(){
		return $this->diskon;
	}

	function getPotongan(){
		return $this->getBayar() * ($this->getDiskon()/100);
	}

	function getTB(){
		return $this->getBayar() - $this->getPotongan();
	}
}

 ?>