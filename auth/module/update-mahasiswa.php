<?php
	session_start();
	//include config
	include_once('../../library/config.php');
	//include environment
	include('../../library/environment.php');
	//include database
	include('../../library/database.php');

	if($_SESSION['username'] == true){

    if($_POST['password'] == "")
    {

  			$s = $connect->prepare("UPDATE tbl_mahasiswa SET nama_mhs = ?, kode_tahun = ?, kode_jurusan = ?, semester = ? WHERE nim = ?");

  			$s->bind_param('siiii',

  			$_POST['nama_mhs'],
  			$_POST['kode_tahun'],
  			$_POST['kode_jurusan'],
  			$_POST['semester'],
        $_POST['nim']

  			);

  			if(!$s->execute())
  			{
  				header('Location:../media.php?action=data-mahasiswa&error');
  			}else{
  				header('Location:../media.php?action=data-mahasiswa&success');
  			}

    }else{

        $s = $connect->prepare("UPDATE tbl_mahasiswa SET nama_mhs = ?, password = ?, kode_tahun = ?, kode_jurusan = ?, semester = ? WHERE nim = ?");

  			$s->bind_param('ssiiii',

  			$_POST['nama_mhs'],
        $_POST['password'],
  			$_POST['kode_tahun'],
  			$_POST['kode_jurusan'],
  			$_POST['semester'],
        $_POST['nim']

  			);

  			if(!$s->execute())
  			{
  				header('Location:../media.php?action=data-mahasiswa');
  			}else{
  				header('Location:../media.php?action=data-mahasiswa');
  			}

    }

	}else{
		header("location:media.php?action=dashboard");
	}
?>
