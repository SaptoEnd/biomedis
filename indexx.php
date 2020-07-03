

<?php

if ($_POST){
$name = $_POST['username_php'];
$pas = $_POST['password_php'];

$log  =New konfig($konek_db);
$log->login($name,$pas);
//die($log);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Biomedis
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!--<link href="assets/demo/demo.css" rel="stylesheet" />-->
    <style type="text/css">
        body{
            background-image: url("https://sim.unissula.ac.id/assets/default/img/pattern/pat_04.png");
            background-repeat: repeat;
            background-color: rgba(112, 143, 255, 0.61);
        }

        div#demo.card{
            padding: 5px 15px;
        }

        div#demo.card hr{
            padding: 2px;
            margin: 0;
        }

        div#demo.card p{
            padding: 0 0;
            margin: 0 0;

        }

        .card [class*="card-header-"]:not(.card-header-icon):not(.card-header-text):not(.card-header-image){
            background-image: url("https://sim.unissula.ac.id/assets/default/img/pattern/pat_04.png");
            background-repeat: repeat;
            background-color: #9830b0;
        }

        div#demo.card{
            background-color: rgba(249, 247, 255, 0.72);
        }
        h6{ text-transform: capitalize; }
    </style>
</head>

<body>
<div class="wrapper ">

    <div class="main-panel" data-color="purple">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Form Login </h4>
                    <p class="card-category"> </p>
                </div>
                <div class="card-body" style="background-image:">
                    <form action="" method="post" role="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating small">Username</label>

                                    <input type="tex" name="username_php"  class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" name="password_php"  class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-center" >Login</button>

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" id="demo">
                <h6>Sebagai percobaan login,<br> Username dan Password </h6>
                <hr size="1px">
                <p style="white-space:pre; padding: 0" class="small">Admin :
    Username : admin
    Password : admin
                </p><hr size="1px">
                <p style="white-space:pre; padding: 0" class="small">Perawat :
    Username : perawat
    Password : perawat
                </p><hr size="1px">
                <p style="white-space:pre; padding: 0" class="small">Apoteker :
    Username : apoteker
    Password : apoteker
                </p><hr size="1px"> <p style="white-space:pre; padding: 0" class="small">Dokter :
    Username : dokter
    Password : dokter
                </p>



        </div>

    </div>
</div>
</div>

