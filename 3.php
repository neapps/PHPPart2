<?php
// ==================================
// Construct dan Destructor pada PHP
// ==================================

class Binatang{
	var $nama;
	var $warna;
	
	function __construct(){
		// isi fungsi construct
		echo "ini adalah construct <br/>";
	}

	function __destruct(){
		//isi fungsi destruct
		echo "Ini adalah destruct <br/>";
	}

	//method Binatang
	function tampilkan_nama(){
		return "Ini adalah Binatang kucing <br/>";
	}
}

// inisiasi class Binatang
$Binatang = new Binatang();

// memanggil method tampilkan_nama Binatang dari class Binatang
echo $Binatang->tampilkan_nama();
?>