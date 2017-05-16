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
			$status = 0;
			$s = $connect->prepare("UPDATE skripsi SET judul1 = ?, desjudul1 = ?, status_judul1 = ?, kelas = ?, pembimbing1 = ? WHERE nim = ?");

			$s->bind_param('ssiiii', 

				$_POST['judul1'],
				$_POST['desjudul1'],
				$status,
				$_POST['kelas'],
				$_POST['pembimbing1'],
				$_POST['nim']

			);

			if(!$s->execute())
			{
				header('Location:../media.php?action=judul-skripsi');
			}else{
				header('Location:../media.php?action=judul-skripsi');
			}

		}elseif($_POST['type'] == 'edit-judul2'){

			$status = 0;
			$s = $connect->prepare("UPDATE skripsi SET judul2 = ?, desjudul2 = ?, status_judul2 = ?, kelas = ?, pembimbing2 = ? WHERE nim = ?");

			$s->bind_param('ssiiii', 

				$_POST['judul2'],
				$_POST['desjudul2'],
				$status,
				$_POST['kelas'],
				$_POST['pembimbing2'],
				$_POST['nim']

			);

			if(!$s->execute())
			{
				header('Location:../media.php?action=judul-skripsi');
			}else{
				header('Location:../media.php?action=judul-skripsi');
			}
		}

	}else{
		header("location:media.php?action=dashboard");
	}
?>