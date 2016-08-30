<?php
/*
@package : Library Database
@author  : Fika Ridaul Maulayya | pondokkode.com
*/

/* start config Database */

if($environment == "development")
{

	$dbhost = 'localhost'; 
	$dbuser = 'root';    
	$dbpass = '';         
	$dbname = 'unwaha';
	 
	// melakukan koneksi ke database
	$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	 
	// cek koneksi yang kita lakukan berhasil atau tidak
	if ($connect->connect_error) {
	   // jika terjadi error, matikan proses dengan die() atau exit();
	   die('Maaf koneksi gagal: '. $connect->connect_error);
	}	
}elseif($environment == "testing"){

	$dbhost = ''; 
	$dbuser = '';    
	$dbpass = '';         
	$dbname = '';
	 
	// melakukan koneksi ke database
	$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	 
	// cek koneksi yang kita lakukan berhasil atau tidak
	if ($connect->connect_error) {
	   // jika terjadi error, matikan proses dengan die() atau exit();
	   die('Maaf koneksi gagal: '. $connect->connect_error);
	}	
}elseif($environment == "production"){

	$dbhost = ''; 
	$dbuser = '';    
	$dbpass = '';         
	$dbname = '';
	 
	// melakukan koneksi ke database
	$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	 
	// cek koneksi yang kita lakukan berhasil atau tidak
	if ($connect->connect_error) {
	   // jika terjadi error, matikan proses dengan die() atau exit();
	   die('Maaf koneksi gagal: '. $connect->connect_error);
	}	
}else{
	echo 'connection database not set, please change your config database';
}
/* end config Databse */

?>