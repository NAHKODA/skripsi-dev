<?php
	session_start();
	//include config
	include_once('../../library/config.php');
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['username'] == true){

  			$s = $connect->prepare("UPDATE skripsi SET status_judul1 = ? WHERE nim = ?");

  			$s->bind_param('ii',

  			$_GET['data'],
        $_GET['nim']

  			);

  			if(!$s->execute())
  			{
  				header('Location:../media.php?action=lihat-judul&nim='.$_GET['nim'].'');
  			}else{
  				header('Location:../media.php?action=lihat-judul&nim='.$_GET['nim'].'');
  			}

	}else{
		header("location:media.php?action=dashboard");
	}
?>
