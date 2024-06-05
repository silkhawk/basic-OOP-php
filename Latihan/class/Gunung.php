<?php 

class Gunung{

	protected $tinggi;
	protected $lokasi;
	protected $status;

	function setTinggi($tinggi)
	{
		$this->tinggi=$tinggi;
	}

	function getTinggi()
	{
		return $this->tinggi;
	}


	function setLokasi($lokasi)
	{
		$this->lokasi=$lokasi;
	}

	function getLokasi()
	{
		return $this->lokasi;
	}

	function getStatus()
	{
		return $this->status;
	}

	function setStatus($status)
	{
		$this->status=$status;
	}

}




 ?>