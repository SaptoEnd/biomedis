<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 3:08 AM
 */

$id = $_GET['id'];
$getjp= New konfig($konek_db);
$jp = $getjp->jp_d($id);

if ($_POST){


    $getjp->jp_e($nm_jenis);
    $jp[]=$nm_jenis;
}

?>


