<?php 
	session_start();
	//include config
	include_once('../../library/config.php');	
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['nim'] == true){

		$s = $connect->prepare("INSERT INTO skripsi (nim,mahasiswa,judul1,desjudul1,judul2,desjudul2,prodi,kelas,pembimbing1,pembimbing2)
		VALUES (?,?,?,?,?,?,?,?,?,?)");

		$s->bind_param("isssssiiii",

			$_POST['nim'],
			$_POST['mahasiswa'],
			$_POST['judul1'],
			$_POST['desjudul1'],
			$_POST['judul2'],
			$_POST['desjudul2'],
			$_POST['prodi'],
			$_POST['kelas'],
			$_POST['pembimbing1'],
			$_POST['pembimbing2']);

		if(!$s->execute())
		{
			header('Location:./media.php?action=dashboard');
		}else{
			header('Location:./media.php?action=ajukan-judul');
		}
		
	}else{
		header('Location:media.php?action=ajukan-judul');
		exit;
	}
?>