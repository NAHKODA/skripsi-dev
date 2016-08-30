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

    }elseif($_GET['action'] == "data-trace"){
        $title = '<i class="pe-7s-server"></i> Data Trace';
        $data_trace = TRUE;
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

        }elseif($_GET['action'] == "data-trace") {
            require "module/data.php";

        }elseif($_GET['action'] == "hapus-data"){
            require "module/hapus-data.php";

        }else{
            require "module/404.php";
        }
	}






/* end content*/
include ('part/footer.php');

?>