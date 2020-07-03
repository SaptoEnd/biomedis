<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:13 AM
 */

//koneksi ke database
//$konek_db =mysqli_connect('localhost','root','','biomedis');
$konek_db =mysqli_connect('sql111.epizy.com','epiz_26030274','saptoutomo992','epiz_26030274_bio');
if (!$konek_db){
    echo 'mysqli tidak konek'.PHP_EOL;
    echo 'mysqli error',mysqli_connect_errno().PHP_EOL;
    exit();
}