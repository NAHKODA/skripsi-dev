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

        }else{
            require "module/404.php";
        }
	}






/* end content*/
include ('part/footer.php');

?>