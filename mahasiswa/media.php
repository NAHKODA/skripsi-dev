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
/**/

include ('part/header.php');

if(!isset($_GET['ref'])){

        $title = '<i class="pe-7s-graph"></i> Dashboard';
        $dashboard = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['ref'] == "dashboard"){
        $title = '<i class="pe-7s-graph"></i> Dashboard';
        $dashboard = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['ref'] == "profile"){
        $title = '<i class="pe-7s-user"></i> User Profile';
        $profile = TRUE;
        include ('part/sidebar.php');

    }elseif($_GET['ref'] == "data-trace"){
        $title = '<i class="pe-7s-server"></i> Data Trace';
        $data_trace = TRUE;
        include ('part/sidebar.php');

    }else{
        echo 'sidebar not found';
    }

include ('part/navbar.php');



/* main content*/
 if(!isset($_GET['ref'])){
        require "module/dashboard.php";
    }else{
        if($_GET['ref'] == "dashboard"){
            require "module/dashboard.php";

        }elseif($_GET['ref'] == "profile") {
            require "module/profile.php";

        }elseif($_GET['ref'] == "data-trace") {
            require "module/data.php";

        }elseif($_GET['ref'] == "hapus-data"){
            require "module/hapus-data.php";

        }else{
            require "module/404.php";
        }
	}






/* end content*/
include ('part/footer.php');

?>