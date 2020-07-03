<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:13 AM
 */


$konek_db = mysqli_connect('sql109.epizy.com','epiz_23219190','jZ7KyCGmz9HvO','epiz_23219190_biomedis');

if(!$konek_db)
{
	echo "Database connection faild...";
}
?>