<?php 

class Pantai{

	protected $warna;
	protected $lokasi;
	protected $pariwisata;

	function __construct($warna,$lokasi)
	{
		$this->warna = $warna;
		$this->lokasi = $lokasi;
	}

	function getWarna()
	{
		return $this->warna;
	}

	function getLokasi()
	{
		return $this->lokasi;
	}

	function setPariwisata($pariwisata)
	{
		$this->pariwisata=$pariwisata;
	}

	function getPariwisata()
	{
		return $this->pariwisata;
	}

}


 ?>