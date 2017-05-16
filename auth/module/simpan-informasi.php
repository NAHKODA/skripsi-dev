<?php
	session_start();
	//include config
	include_once('../../library/config.php');
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['username'] == true){

			$status = 0;
			$s = $connect->prepare("UPDATE tbl_informasi SET judul = ?, isi_informasi = ? WHERE id = ?");

			$s->bind_param('ssi',

				$_POST['judul'],
				$_POST['content'],
        $_POST['id']


			);

			if(!$s->execute())
			{
				header('Location:../media.php?action=informasi');
			}else{
				header('Location:../media.php?action=informasi');
			}

	}else{
		header("location:media.php?action=dashboard");
	}
?>
