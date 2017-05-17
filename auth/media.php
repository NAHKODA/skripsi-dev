<?php
session_start();
if (empty($_SESSION['username'] && $_SESSION['password'])) {
  header('location:index.php');
}
/* create environment */
include ('../library/environment.php');
/* end environment */

/*db*/
include('../library/database.php');
/**/

/* start get config */
  include('../library/config.php');
/* end get config */
include ('part/header.php');

if(!isset($_GET['action'])){

        $title = '<i class="pe-7s-graph"></i> Dashboard';
        $dashboard = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "dashboard"){
        $title = '<i class="pe-7s-graph"></i> Dashboard';
        $dashboard = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "profile"){
        $title = '<i class="pe-7s-user"></i> User Profile';
        $profile = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "data-mahasiswa"){
        $title = '<i class="pe-7s-study"></i> Data Mahasiswa';
        $mahasiswa = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "tambah-mahasiswa"){
        $title = '<i class="pe-7s-study"></i> Tambah Mahasiswa';
        $mahasiswa = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "edit-mahasiswa"){
        $title = '<i class="pe-7s-study"></i> Edit Mahasiswa';
        $mahasiswa = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "hapus-mahasiswa"){
        $title = '<i class="pe-7s-study"></i> Hapus Mahasiswa';
        $mahasiswa = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "data-pengajuan-judul"){
        $title = '<i class="pe-7s-server"></i> Data Pengajuan Judul';
        $data_judul = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "lihat-judul"){
        $title = '<i class="pe-7s-server"></i> Lihat Judul';
        $data_judul = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "informasi"){
        $title = '<i class="pe-7s-note"></i> Informasi';
        $informasi = TRUE;
        include ('part/sidebar.php');

    }else{
        echo 'sidebar not found';
    }

include ('part/navbar.php');



/* main content*/
 if(!isset($_GET['action'])){
        require "module/dashboard.php";
    }else{
        if($_GET['action'] == "dashboard"){
            require "module/dashboard.php";

        }elseif($_GET['action'] == "profile") {
            require "module/profile.php";

        //data judul
        }elseif($_GET['action'] == "data-pengajuan-judul") {
            require "module/data-pengajuan-judul.php";

        }elseif($_GET['action'] == "lihat-judul"){
            require "module/lihat-judul.php";

        //informasi
        }elseif($_GET['action'] == "informasi"){
            require "module/data-informasi.php";

        //mahasiswa
      }elseif($_GET['action'] == "data-mahasiswa"){
            require "module/data-mahasiswa.php";

        }elseif($_GET['action'] == "tambah-mahasiswa"){
            require "module/tambah-mahasiswa.php";

        }elseif($_GET['action'] == "edit-mahasiswa"){
            require "module/edit-mahasiswa.php";

        }elseif($_GET['action'] == "hapus-mahasiswa"){
            require "module/hapus-mahasiswa.php";

        //jadwal
      }else{
            require "module/404.php";
        }
	}






/* end content*/
include ('part/footer.php');

?>
