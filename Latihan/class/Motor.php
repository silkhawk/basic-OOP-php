<?php 
class Motor
{
	 $warna;
	 $cc;
	 $tahun;

	function __construct($warna)
	{
		$this->warna=$warna;
	}

	function getWarna()
	{
		return $this->warna;
	}

	function setCc($cc)
	{
		$this->cc = $cc;
	}
	function getCc()
	{
		return $this->cc;
	}

	function setTahun($tahun)
	{
		$this->tahun = $tahun;
	}
	function getTahun()
	{
		return $this->tahun;
	}
}


 ?>