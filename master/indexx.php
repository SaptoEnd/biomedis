
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:24 AM
 */
session_start();
include '../config/konek_db.php';
include '../config/konfig.php';


?>

<?php

if ($_POST){
$name = $_POST['username_php'];
$pas = $_POST['password_php'];

$log =New konfig($konek_db);
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
</head>

<body class="" style="background-image: ">
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
        <div class="col-md-6">
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

    </div>
</div>
</div>

