<?php 
	session_start();
	//include config
	include_once('../../library/config.php');	
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['nim'] == true){

		if($_POST['type'] == 'edit-judul1')
		{

		}elseif($_POST['type'] == 'edit-judul2'){

		}

	}else{
		header("location:media.php?action=dashboard");
	}
?>