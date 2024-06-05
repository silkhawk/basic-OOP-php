
<?php 

class Motor{

	private $cc;
	public $warna;
	public $brand;
	public $merk;
	public $jenis;


	function setWarna($color)
		{
			$this->warna = $color;
		}

	function GetWarna()
		{
			return $this->warna;
		}
}

$mio = new Motor();
$Cbr = new Motor();
$ninja = new Motor();



//var_dump($mio instanceof Motor);

$mio->cc='110';
$ninja->cc='250';
$Cbr->warna='Hitam';

$mio->setWarna('biru');

echo "motor mio saya berwarna <b>".$mio->GetWarna()."</b>";




 ?>