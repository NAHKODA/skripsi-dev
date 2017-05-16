<?php
	session_start();
	//include config
	include_once('../../library/config.php');
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['username'] == true){

		$s = $connect->prepare("INSERT INTO tbl_mahasiswa (nim,nama_mhs,password,kode_tahun,kode_jurusan,semester)
		VALUES (?,?,?,?,?,?)");

		$s->bind_param("issiii",

			$_POST['nim'],
			$_POST['nama_mhs'],
			$_POST['password'],
			$_POST['kode_tahun'],
			$_POST['kode_jurusan'],
			$_POST['semester']
		);


		if(!$s->execute())
		{
			header('Location:../media.php?action=data-mahasiswa');
		}else{
			header('Location:../media.php?action=data-mahasiswa');
		}

	}else{
		header('Location:media.php?action=dashboard');
		exit;
	}
?>
