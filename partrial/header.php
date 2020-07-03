<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Biomedis
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="partrial/css1.css" />
    <link rel="stylesheet" href="partrial/css2.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!--<link href="assets/demo/demo.css" rel="stylesheet" />-->
</head>

<style>

    .nav-item .n{

        background-color: #d981f6;
    }

    div ul li a.nav-item .n{
        color: white;

    }

    .nav-item .m{

        background-color: #d981f6;
        color: #714280;
    }

    body {
        background-color: rgba(112, 143, 255, 0.61);

    }

    .sidebar .sidebar-wrapper{
        background-image: url("https://sim.unissula.ac.id/assets/default/img/pattern/pat_04.png");
        background-repeat: repeat;
        background-color: rgba(112, 143, 255, 0.61);

    }

    .sidebar .nav li:hover > a{
        background-color: rgba(112, 143, 255, 0.61);
        color: #f9f7ff;
        box-shadow: white;
    }

    .sidebar .nav li a:focus{
        background-color: rgba(112, 143, 255, 0.61);
    }

</style>

<body>

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="" class="simple-text logo-normal active">
                RS Biomedis
            </a>
        </div>
        <div class="sidebar-wrapper">
            <?php echo '
            
             <ul class="nav">  
                
            ';

            if (isset($_SESSION['level'])){
                if ($_SESSION['level']=='admin'){
                echo '
                    <!--<a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Pasien <span class="badge badge-success">6</span></a>
                    <div id="submenu-1" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">-->                           
                            <li class="nav-item  ">
                                <a class="nav-link m" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2-3" aria-controls="submenu-1-2" >Master</a>
                                <div id="submenu-1-2-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link n" style="color: white" href="index.php?aksi=dok_v&id=?">Dokter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link n" style="color: white" href="index.php?aksi=spl_v&id=?">Spesialis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link n" style="color: white" href="index.php?aksi=pgw&id=?">Pegawai</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                </li>
                                 <li class="nav-item  ">
                                    <!--<a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Pasien <span class="badge badge-success">6</span></a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">-->
                                                <a class="nav-link m" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Pasien</a>
                                                <div id="submenu-1-2" class="collapse submenu" >
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link n" href="index.php?aksi=pasien_i&id=?">Registrasi</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link n" href="index.php?aksi=pasien_v&id=?">List Pasien</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            <!--</li>
                                        </ul>
                                    </div>-->
                                 </li>
                                 <li class="nav-item  ">
                                    <a class="nav-link m" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2n" aria-controls="submenu-1-2">Kegiatan</a>
                                        <div id="submenu-1-2n" class="collapse submenu" >
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link n" href="index.php?aksi=khi&id=?">Kunjungan Hari Ini</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link n" href="index.php?aksi=dk&id=?">Data Kunjungan</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                 </li>
                      
                ';
                }//elseif disini
                //kondisi logi perawat
                elseif ($_SESSION['level']=='perawat'){
                    echo '
                         <li class="nav-item  ">
                         <a class="nav-link m" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2-3-perawat-a" aria-controls="submenu-1-2" >Master</a>
                                <div id="submenu-1-2-3-perawat-a" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link n" href="index.php?aksi=jp_v&id=?">Data Jenis Penyakit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link n" href="index.php?aksi=dp_v&id=?">Data Penyakit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link n" href="index.php?aksi=dtm_v&id=?">Data Tindakan Medis</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                         </li>
                         
                         <li class="nav-item  ">
                         <a class="nav-link m" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2-3-perawat-b" aria-controls="submenu-1-2" >Rekam Medis</a>
                                <div id="submenu-1-2-3-perawat-b" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <!--<a class="nav-link n" href="index.php?aksi=rm_p&id=?">Input Rekam Medis</a>-->
                                            <a class="nav-link n" href="index.php?aksi=p_pasien_v&id=?">Input Rekam Medis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link n" href="index.php?aksi=rm&id=?">Data Rekam medis</a>
                                        </li> 
                                    </ul>
                                </div>
                         </li>
                    
                    ';
                //kondisi login dokter
                }elseif ($_SESSION['level']=='dokter'){
                    echo '
                        <li class="nav-item">
                            <a class="nav-link n"  href="index.php?aksi=jp_v&id=?">Jadwal Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link n"  href="index.php?aksi=p_pasien_v&id=?">Rekam Medis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link n"  href="index.php?aksi=p_pasien_v&id=?">Tindakan dan Obat</a>
                        </li>
                    ';

                //kodisi login apoteker
                }elseif ($_SESSION['level']=='apoteker'){
                    echo '
                        
                     <li class="nav-item">
                            <a class="nav-link n" id="apoteker" href="index.php?aksi=obat_v&id=?">Master Obat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link n" id="apoteker" href="index.php?aksi=jp_v&id=?">Resep Obat</a>
                        </li>
                                            
                    ';
                }
            }
            echo '
            </ul> 
            ';
            ?>
            <ul class="navbar-nav flex-column">
            </ul>
        </div>
    </div>
    <div class="main-panel" data-color="purple">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " >
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form" style="padding-right: ">
                        <div class="input-group no-border">
                            <?
                            $id=$_GET['id'];
                            $getid= New konfig($konek_db);
                            $get=$getid->pasien_sc($id);

                            ?>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <div class="" style="padding-left: 50px ">
                            <a href="#" class="simple-text logo-normal active small">
                                <b> Selamat Datang,</b> <?
                                $nilai = 1;
                                if (isset($_SESSION['level'])) {
                                    if ($_SESSION['level'] == $nilai){
                                        echo '';
                                    }else{
                                        echo $_SESSION['level'];
                                    }
                                }
                                //session_start();
                                ?>
                            </a>
                        </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?aksi=log&id=?">Log out</a>
                            </div>
                        </li>
                    </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
