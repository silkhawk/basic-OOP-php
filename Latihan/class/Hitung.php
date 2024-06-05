<?php 

class Hitung{

	public $harga;
	public $jumlah;
	public $bayar;

	function setHarga($harga)
	{
		$this->harga = $harga;
	}

	function setJumlah($jumlah)
	{
		$this->jumlah = $jumlah;
	}

	function getHarga()
	{
		return $this->harga;
	}

	function getJumlah()
	{
		return $this->jumlah;
	}

	function getBayar(){
		return $this->harga * $this->jumlah;
	}

}





 ?>