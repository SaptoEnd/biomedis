<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:13 AM
 */

//koneksi ke database
$konek_db =mysqli_connect('localhost','root','','biomedis');
if (!$konek_db){
    echo 'mysqli tidak konek'.PHP_EOL;
    echo 'mysqli error',mysqli_connect_errno().PHP_EOL;
    exit();
}