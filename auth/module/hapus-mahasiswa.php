<?php
	session_start();
	//include config
	include_once('../../library/config.php');
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['username'] == true){

      $s = $connect->prepare("DELETE FROM tbl_mahasiswa WHERE nim = ?");
      $s->bind_param('i', $_GET['nim']);

      if(!$s->execute())
      {
        header('Location:../media.php?action=data-mahasiswa');
      }else{
        header('Location:../media.php?action=data-mahasiswa');
      }

	}else{
		header("location:media.php?action=dashboard");
	}
?>
