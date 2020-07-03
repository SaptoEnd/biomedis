<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:24 AM
 */
include 'header.php';
include 'konek_db.php';

session_start();

    if (isset($_GET["aksi"])){
        $aksi =$_GET["aksi"];

    }else{
        $aksi ="";
    }

    //obat
    if ($aksi=="admin"){
        include 'welcome_admin.php'; //sudah

    }elseif ($aksi=="log"){
        include 'cek_log.php'; //sudah

    }elseif ($aksi=="obat_v"){
        include 'obat/obat_v.php'; //sudah

    }elseif ($aksi=="obat_e"){
        include 'obat/obat_e.php'; //sudah
    }else{
        include 'indexx.php';
    }

?>