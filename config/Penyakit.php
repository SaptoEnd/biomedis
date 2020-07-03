<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 12:09 PM
 */

class Penyakit
{
    var $konek_db;

    function __construct($kon)
    {
        $this->konek_db=$kon;

    }

    //tampilkan penyakit
    function penyakit_v(){
        //kode disini
        $hasil=1;
        $sql ="SELECT * FROM penyakit";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        return $query;
    }

    //tampil jenis penyakit
    function jp_v(){
        $nilai =1;
        $sql = "SELECT * FROM jenis_penyakit";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $nilai= 0;
        }
        return $query;
    }
}