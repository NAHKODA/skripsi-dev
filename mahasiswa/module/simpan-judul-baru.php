<?php
	session_start();
	//include config
	include_once('../../library/config.php');
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['nim'] == true){

		$status_judul1 = 0;
		$status_judul2 = 0;
		$s = $connect->prepare("INSERT INTO skripsi (nim,mahasiswa,judul1,desjudul1,status_judul1,judul2,desjudul2,status_judul2,prodi,kelas,pembimbing1,pembimbing2)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

		$s->bind_param("isssissiiiii",

			$_POST['nim'],
			$_POST['mahasiswa'],
			$_POST['judul1'],
			$_POST['desjudul1'],
			$status_judul1,
			$_POST['judul2'],
			$_POST['desjudul2'],
			$status_judul2,
			$_POST['prodi'],
			$_POST['kelas'],
			$_POST['pembimbing1'],
			$_POST['pembimbing2']
		);


		if(!$s->execute())
		{
			header('Location:../media.php?action=dashboard');
		}else{
			header('Location:../media.php?action=dashboard');
		}

	}else{
		header('Location:media.php?action=ajukan-judul');
		exit;
	}
?>
