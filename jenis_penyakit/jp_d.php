<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 3:09 AM
 */

//Hal detai jenis penyakit
//
//
//

$id = $_GET['id'];
$getjp= New konfig($konek_db);
$jp =$getjp->jp_d($id);
?>