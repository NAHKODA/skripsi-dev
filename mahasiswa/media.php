<?php 
session_start();
if (empty($_SESSION['username'] && $_SESSION['password'])) {
  header('location:index.php');
}

/* create environment */
include ('../library/environment.php');
/* end environment */ 

/*db*/
include('./library/database.php');
/*/

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

    }elseif($_GET['action'] == "profile-mahasiswa"){
        $title = '<i class="pe-7s-user"></i> Profile Mahasiswa';
        $profile = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "judul-skripsi"){
        $title = '<i class="pe-7s-note2"></i> Judul Skripsi';
        $judul_skripsi = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "edit-judul1"){
        $title = '<i class="pe-7s-note2"></i> Edit Judul 1';
        $judul_skripsi = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "edit-judul2"){
        $title = '<i class="pe-7s-note2"></i> Edit Judul 2';
        $judul_skripsi = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "ajukan-judul"){
        $title = '<i class="pe-7s-note2"></i> Ajukan Judul';
        $judul_skripsi = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['action'] == "dosen-pembimbing"){
        $title = '<i class="pe-7s-users"></i> Dosen Pembimbing';
        $dosen_pembimbing = TRUE;
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

        }elseif($_GET['action'] == "profile-mahasiswa") {
            require "module/profile.php";

        }elseif($_GET['action'] == "judul-skripsi") {
            require "module/judul-skripsi.php";

        }elseif($_GET['action'] == "edit-judul1") {
            require "module/edit-judul1.php";

        }elseif($_GET['action'] == "edit-judul2") {
            require "module/edit-judul2.php";

        }elseif($_GET['action'] == "ajukan-judul") {
            require "module/ajukan-judul.php";

        }elseif($_GET['action'] == "dosen-pembimbing") {
            require "module/dosen-pembimbing.php";

        }else{
            require "module/404.php";
        }
	}






/* end content*/
include ('part/footer.php');

?>