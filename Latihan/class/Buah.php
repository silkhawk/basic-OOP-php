<?php 
class Buah
{ 		
	protected  $nama; 
	protected  $warna; 
	protected  $rasa; 
		
	public function __construct($nama,$warna)
	{
	    $this->nama = $nama;
	    $this->warna = $warna;
  	}
	public function getNama()
	{
		return $this->nama;
	}
	public function getWarna()
	{
		return $this->warna;
	}
	public function setRasa($rasa)
	{
		$this->rasa = $rasa;
	}
	public function getRasa()
	{
		return $this->rasa;
	}		
}
?>
