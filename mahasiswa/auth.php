<?php
require_once('../library/environment.php');
require_once('../library/database.php');

$username = $_POST['username'];
$password = $_POST['password'];


$query 	  = mysqli_query($connect,"SELECT * FROM tbl_mahasiswa WHERE nim = '$username' AND password = '$password'");
$row  	  = mysqli_fetch_array($query);

if ($row['nim'] == $username AND $row['password'] == $password){

	session_start();

	$_SESSION['nim'] 			  = $row['nim'];
	$_SESSION['password'] 	= $row['password'];
	$_SESSION['nama_mhs'] 	= $row['nama_mhs'];
	$_SESSION['prodi']			= $row['kode_jurusan'];

	header('location:media.php?action=dashboard');


}else{
	$error = '<div class="alert alert-danger alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  					<strong><i class="fa fa-times-circle"></i> Warning!</strong> Username dan Password Anda salah.
			  </div>';
	include('index.php');




}

?>
