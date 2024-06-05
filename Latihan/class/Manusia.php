<?php 
class Manusia{
	protected $nama;
	protected $jk;
	protected $warna;
	protected $berat;
	protected $tinggi;
	
	function __construct($jk,$warna){
		$this->jk = $jk;
		$this->warna = $warna;
	}

	function getJk(){
		return $this->jk;
	}

	function getWarna(){
		return $this->warna;
	}
}


 ?>