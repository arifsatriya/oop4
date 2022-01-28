<?php 
class kendaraan
{
	var $jenis;
	var $tahun;
	var $nama;
	
	function __construct($x,$y,$a)
	{
		$this->jenis = $x;
		$this->tahun = $y;
		$this->nama = $a;
	}
	
	function tipe()
	{
		if($this->jenis == 1) $set = "Motor";
		else if($this->jenis == 2) $set = "Mobil";
		else $set = "Truk Besar";
		return $set;
	}
	
	function diskon()
	{
		if($this->tahun <= 2010) $ket = "20%";
		else $ket = "Tidak ada";
		return $ket;
	}
	
	function pajak()
	{
		switch($this->jenis)
		{
			case '1':
				$pajak = 200000;
				
				if($this->tahun <= 2010)
					$bayar = $pajak - (200000 * 20 / 100);
				else
					$bayar = $pajak;
			break;
			case '2':
				$pajak = 500000;
				
				if($this->tahun <= 2010)
					$bayar = $pajak - (500000 * 20 / 100);
				else
					$bayar = $pajak;
			break;	
			default:
				$pajak = 1000000;
				
				if($this->tahun <= 2010)
					$bayar = $pajak - (1000000 * 20 / 100);
				else
					$bayar = $pajak;
			break;
		}
		return $bayar;
	}
}

$kendaraan1 = new kendaraan
	(
		$_POST['jenis'],
	 	$_POST['tahun'],
		$_POST['nama']
	);

echo"<center><p>";
echo"<h2>Keterangan Pajak</h2><br>";
echo "Jenis kendaraan = ".$kendaraan1->tipe();
echo "<br>Tahun kendaraan = ".$kendaraan1->tahun;
echo "<br>Nama Pemilik = ".$kendaraan1->nama;
echo "<br>Nilai diskon = ".$kendaraan1->diskon();
echo "<br>Pajak = ".number_format($kendaraan1->pajak());
echo "<br><br><input type='button' value='Go Back' onclick='history.back(-1)'/>";
echo"</p></center>";
?>