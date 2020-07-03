<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:24 AM
 */
session_start();
include 'config/konek_db.php';
include 'config/konfig.php';
include 'config/Penyakit.php';
?>


<?php
if (isset($_GET["aksi"])){ //ambil jika ada permintaan aksi
    $aksi =$_GET["aksi"]; //simpan permintaan dalam variable $aksi
}else{
    $aksi =""; //
}

if (isset($_SESSION['level'])){
    include 'partrial/header.php';

    //aksi login admin
    if ($_SESSION['level']=='admin') {
        //menu master dokter -> view dokter
        if ($aksi == "tdok") { //tambah dokter
            include 'dokter/dok_i.php';
        } elseif ($aksi == "hps") { //aksi hapus dokter
            include 'dokter/dok_h.php';

        } elseif ($aksi == "edit") { //tampilan edit dokter
            include 'dokter/dok_e.php';

        } elseif ($aksi == "detail") { //tampilkan detail dokter
            include 'dokter/detail_dok.php';

        } elseif ($aksi == "log") { //logout
            include 'master/logout.php';
        }elseif ($aksi == "dok_v") { //tampilkan semua dokter
            include 'dokter/dok_v.php';
        }

        //menu master dokter -> view spesialis
        elseif ($aksi == "spl_v") { //tampilkan semua data spesialis
            include 'spl/spl_v.php';
        } elseif ($aksi == "spl_h") { //hapus spesialis
            include 'spl/spl_h.php';
        } elseif ($aksi == "spl_e") { //edit spesialis
            include 'spl/spl_e.php';
        } elseif ($aksi == "spl_i") { //input spesialis
            include 'spl/spl_i.php';
        }

        //menu jadwal dokter
        elseif ($aksi=="jdw"){ //jadwal dokter
            include 'dokter/jdw_v.php';
        }elseif ($aksi==""){ //input jadwal dokter
            include 'dokter/jdw_i.php';
        }

        //menu kegiatan
        elseif ($aksi=="khi"){ //tampilan kunjungan hari ini
            include 'kegiatan/khi_v.php';
        }elseif ($aksi=="dk"){ //tampilkan data kunjungan
            include 'kegiatan/dk_v.php';
        }elseif ($aksi=="tkj_i"){ //tambah kunjungan
            include 'kegiatan/tkj_i.php';
        }

        //menu master dokter -> view pegawai
        elseif ($aksi == "pgw") { //tampil semua data pegawai
            include 'datapegawai/data_pegawai.php';
        } elseif ($aksi == "pgw_i") { //input data pegawai
            include 'datapegawai/tambah_pegawai.php';
        } elseif ($aksi == "pgw_h") { //hapus data pegawai
            include 'datapegawai/hapus_pegawai.php';
        } elseif ($aksi == "pgw_e") { //edit data pegawai
            include 'datapegawai/pegawai_e.php';
        }

        //menu master dokter -> view pasien
        elseif ($aksi == "pasien_i") { //input data pasien
            include 'pasien/pasien_i.php';
        } elseif ($aksi == "pasien_v") { //tampilkan semua data pasien
            include 'pasien/pasien_v.php';

        } elseif ($aksi == "pasien_h") { //hapus data pasien
            include 'pasien/pasien_h.php';
        } elseif ($aksi == "pasien_e") { //edit data pasien
            include 'pasien/pasien_e.php';
        }else{
            include 'eror.php';
        }

    //aksi login perawat
    }elseif ($_SESSION['level']=='perawat'){
        if($aksi=="jp_i"){ //input jenis penyakit
            include 'jenis_penyakit/jp_i.php';
        }elseif ($aksi=="jp_v"){ //tampilkan jenis penyakit
            include 'jenis_penyakit/jp_v.php';
        }elseif ($aksi=="log"){ //keluar dari perawat
          include 'master/logout.php';
        }elseif ($aksi=="jp_h"){
            include 'jenis_penyakit/jp_h.php';

        }elseif ($aksi=="dp_v"){
            include 'penyakit/dp_v.php';

        }elseif ($aksi=="dp_i"){
            include 'penyakit/dp_i.php';

        }elseif ($aksi=="rm_p"){
            include 'dokter/rekam_i.php';

        }elseif ($aksi=="p_pasien_v"){
            include 'perawat/p_pasien_v.php';

        }elseif($aksi=="rm"){
            include 'perawat/rm_v.php';
        }
        else{
            include 'eror.php';
        }

    //aksi login dokter
    }elseif ($_SESSION['level']=='dokter'){
        if ($aksi=="log"){
            include 'master/logout.php';
        }elseif ($aksi=="djwl"){
            include '';
        }elseif($aksi=="r_kj"){
            include 'dokter/rekam_i.php';
        }elseif($aksi=="rm") {
            include 'perawat/rm_v.php';
        }elseif ($aksi=="p_pasien_v"){
            include 'perawat/p_pasien_v.php';
        }elseif ($aksi == "pasien_v") { //tampilkan semua data pasien
            include 'pasien/pasien_v.php';
        }elseif ($aksi=="tdk"){
            include 'dokter/tindakan.php';
        }
        else{
            include 'eror.php';
        }

    //aksi login apoteker
    }elseif($_SESSION['level']=='apoteker'){
        if ($aksi=="log"){
            include 'master/logout.php';
        }elseif ($aksi=="obat_v"){
            include 'obat/obat_v.php';
        }elseif ($aksi=="obat_t"){
            include 'obat/obat_i.php';
        }
        else{
            include 'eror.php';
        }
    }

}


else{
   // tampilan awal
    include 'indexx.php';
}

include 'partrial/footer.php';
?>


