<?php
require_once('../library/environment.php');
require_once('../library/database.php');

$username = $_POST['username'];
$password = md5($_POST['password']);


$query 	  = mysqli_query($connect,"SELECT * FROM tbl_admin WHERE username = '$username' AND pass = '$password'");
$row  	  = mysqli_fetch_array($query);	

if ($row['username'] == $username AND $row['pass'] == $password){

	session_start();

	$_SESSION['id_admin']	= $row['id'];
	$_SESSION['username'] 	= $row['username'];
	$_SESSION['password'] 	= $row['pass'];
	$_SESSION['nama']		= $row['nama'];
	$_SESSION['email']		= $row['email'];


	header('location:media.php?action=dashboard');


}else{
	$error = '<div class="alert alert-danger alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  					<strong><i class="fa fa-times-circle"></i> Warning!</strong> Username dan Password Anda salah.
			  </div>';
	include('index.php');




}

?>