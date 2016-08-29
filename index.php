<?php
/**
 * Skripsi - Universitas KH. A. Wahab Hasbullah.
 *
 * @package  Skripsi Beta Version
 * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 */

/* create environment */
    include('library/environment.php');
/* end environment */   

/* start get config */
	include('library/config.php');
/* end get config */

/* start header */
	include('part/header.php');
/* end header */

/* start content */
    if(!isset($_GET['action'])){
        require "module/home.php";
    }else{
        if($_GET['action'] == "home"){
            require "module/home.php";

        }elseif ($_GET['action'] == "semua-judul") {
        	$kode_prodi = '';
        	$breadcrumb = 'Semua judul';
            require "module/tabel-judul-skripsi.php";
        
        }elseif ($_GET['action'] == "teknik-informatika") {
        	$kode_prodi = '';
        	$breadcrumb = 'Teknik Informatika';
            require "module/tabel-judul-skripsi.php";
        
        }elseif ($_GET['action'] == "sistem-informasi") {
        	$kode_prodi = '';
        	$breadcrumb = 'Sistem Informasi';
            require "module/tabel-judul-skripsi.php";
        
        }elseif ($_GET['action'] == "statistik") {
        	$kode_prodi = '';
        	$breadcrumb = 'Statistik';
            require "module/statistik.php";
        
        }else{
            require "module/404.php";
        }
    }

/* end content */

/* start footer */
	include('part/footer.php');
/* end footer */
?>