<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:23 AM
 */

class konfig
{
    var $konek_db;

    function __construct($kon)
    {
        $this->konek_db=$kon;

    }
    //FUNCTION DOKTER
    function ambil(){
        $hasil=1;
        $query="SELECT * FROM dokter";
        $result =mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $data = mysqli_fetch_array($result);
        return $data;
    }

    //tampilkan id dokter
    //insert dokter
    function i_dok($id_dok,$nama_dok,$alamat_dok,$telepon_dok){
        $nilai=1;
        $query = "INSERT INTO `dokter` (`id_dokter`,`nama_dokter`,`alamat_dokter`,`telepon_dokter`) VALUES ('$id_dok','$nama_dok','$alamat_dok','$telepon_dok')";
        $result = mysqli_query($this->konek_db,$query);
        if (!$result){
            $nilai=0;
        }
        return $nilai;
    }
    //tampilkan dokter
    function v_dok(){
        $nilai=1;
        $query = "SELECT * FROM dokter ";
        $result = mysqli_query($this->konek_db,$query);
        if (!$result){
            $nilai=0;
        }
        return $result;
    }
    //menampilkan kode  otomatis dokter
    function v_cod(){
        $hasil=1;
        $query ="SELECT max(id_dokter) as maxKode FROM dokter ";
        $result= mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $vCod=mysqli_fetch_array($result);
        $k_unik=$vCod['maxKode'];
        $no_kode = (int)substr($k_unik,3,3);
        $no_kode++;

        $char="DK-";
        $vCod=$char.sprintf("%03s",$no_kode)."ID";
        return $vCod;
    }
    //hapus dokter ID STRING
    function hps($id){
        $hasil=1;
        $sql="DELETE FROM `dokter` WHERE  id_dokter='{$id}'";
        $result=mysqli_query($this->konek_db,$sql);
        if(!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //Edit Dokter
    function editDOk($id,$nama_dok,$alamat_dok,$telepon_dok){
        $hasil=1;
        $query="UPDATE `dokter` SET `nama_dokter`='$nama_dok',`alamat_dokter`='$alamat_dok',`telepon_dokter`='$telepon_dok' WHERE id_dokter='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //Lihat detail dok
    function detailDok($id){
        $hasil=1;
        $qury ="SELECT * FROM `dokter` WHERE id_dokter ='{$id}'";
        $result=mysqli_query($this->konek_db,$qury);
        if (!$result){
            $hasil=0;
        }
        $getDok = mysqli_fetch_array($result);
        return $getDok;
    }

    //FUNCTION SPESIALIS
    //insert table spesialis
    function i_spl($id_spl,$nama_spl){
        $nilai=1;
        $query = "INSERT INTO `spesialis` (`id_spesialis`,`nama_spesialis`) VALUES ('$id_spl','$nama_spl')";
        $result = mysqli_query($this->konek_db,$query);
        if (!$result){
            $nilai=0;
        }
        return $nilai;
    }
    //tampilkan spesialis
    function v_spl(){
        $nilai=1;
        $query = "SELECT * FROM spesialis ";
        $result = mysqli_query($this->konek_db,$query);
        if (!$result){
            $nilai=0;
        }
        return $result;
    }
    //hapus spesialis
    function hpsSpl($id){
        $hasil=1;
        $sql="DELETE FROM `spesialis` WHERE  id_spesialis='{$id}'";
        $result=mysqli_query($this->konek_db,$sql);
        if(!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //detail spesialis
    function dSpl($id){
        $hasil=1;
        $sql="SELECT * FROM `spesialis` WHERE id_spesialis ='{$id}'";
        $query=mysqli_query($this->konek_db,$sql);
        if ($query){
            $hasil=0;
        }
        $d_fetch=mysqli_fetch_array($query);
        return $d_fetch;

    }
    //edit spesialis
    function spl_e($id,$id_spl,$name_spl){
        $hasil=1;
        $sql="UPDATE `spesialis` SET `id_spesialis`='$id_spl', `nama_spesialis`='$name_spl' WHERE id_spesialis='{$id}'";
        $query=mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil=0;
        }
        return $hasil;

    }
    //id otomatis spesialis
    function splid(){
        $hasil=1;
        $query ="SELECT max(id_spesialis) as maxKode FROM spesialis";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $show_cod=mysqli_fetch_array($result);
        $get_cod=$show_cod['maxKode'];
        $kode_int=(int)substr($get_cod,3,3);
        $kode_int++;

        $char="SP";
        $v_codes=$char.sprintf("%03s",$kode_int)."AT";
        return $v_codes;

    }


    //SPESIALIS DOKTER
    //insert id spesialis dokter
    function spldok_i($id_dk,$id_spl){
        $nilai=1;
        $query = "INSERT INTO `spesial_dokter` (`id_dokter`,`id_spesialis`) VALUES ('$id_dk','$id_spl')";
        $result = mysqli_query($this->konek_db,$query);
        if (!$result){
            $nilai=0;
        }
        return $nilai;
    }
    //Edit Spesialis dokter
    function spldok_e($id_dk,$id_spl){
        $hasil=1;
        $query="UPDATE `spesial_dokter` SET `id_dokter`='$id_dk',`id_spesialis`='$id_spl' WHERE id_dokter='{$id_dk}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //id otomatis spesialis_dokter
    function idSpldok(){
        $hasil=1;
        $query ="SELECT max(id_spesialis) as maxKode FROM spesial_dokter ";
        $result= mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;

        }
        $vCod=mysqli_fetch_array($result);
        $k_unik=$vCod['maxKode'];
        $no_kode = (int)substr($k_unik,3,3);
        $no_kode++;

        $char="IDS-";
        $vCod=$char.sprintf("%03s",$no_kode)."PL";
        return $vCod;
    }



    //FUNCTION OBAT
    //insert Obat
    function obat_i($id_o,$nama_o,$id_bp,$satuan){
        $hasil=1;
        $query ="INSERT INTO `obat` (`id_obat`,`nama_obat`,`id_bpom`,`satuan`) VALUES ('$id_o','$nama_o','$id_bp','$satuan')";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //view obat
    function view_o(){
        $hasil=1;
        $query="SELECT * FROM obat";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $result;
    }
    //updat obat
    function edit_o($id,$nama_o,$id_bp,$satuan){
        $hasil=1;
        $query="UPDATE `obat` SET `nama_obat`='$nama_o',`id_bpom`='$id_bp',`satuan`='$satuan' WHERE id_obat='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //hapus obat
    function obat_hps($id){
        $hasil=1;
        $query="DELETE FROM obat WHERE id_obat='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //code otomatis obat
    function oto_obatCode(){
        $hasil=1;
        $query ="SELECT max(id_obat) as maxKode FROM obat";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $show_cod=mysqli_fetch_array($result);
        $get_cod=$show_cod['maxKode'];
        $kode_int=(int)substr($get_cod,3,3);
        $kode_int++;

        $char="OB";
        $v_codes=$char.sprintf("%03s",$kode_int)."AT";
        return $v_codes;

    }
    //detail obat
    function detailObat($id){
        $hasil=1;
        $query="SELECT * FROM obat WHERE id_obat='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $show=mysqli_fetch_array($result);
        return $show;
    }

    function login($name,$pas){
        $hasil=1;
        $sql="SELECT * FROM `user` WHERE `name`='$name' AND `pass`='$pas'";
        $query=mysqli_query($this->konek_db,$sql);

        $n=mysqli_num_rows($query);
        $data=mysqli_fetch_array($query);
        /*        $id=['id_user'];
                $data=$id;*/
        if ($n>0){

            /* header('location:index.php');*/
            if ($data['level'] == 'admin') {

                $_SESSION['username'] = $data['name'];
                // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
                $_SESSION['level'] 	  = $data['level'];
                /*echo '<script>alert("selamat datang , admin"); window.location="index.php?&id='.$data['id_user'].'"</script>';*/
                echo '<script>alert("selamat datang , admin"); window.location="index.php?aksi=dok_v&id=?"</script>';

            }elseif($data['level'] == 'perawat'){
                $_SESSION['username'] = $data['name'];
                // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
                $_SESSION['level'] 	  = $data['level'];
                echo '<script>alert("Selamat Datang, Di Hal perawat");document.location="index.php?aksi=jp_v&id=?"</script>';

            }elseif ($data['level'] == 'dokter'){
                $_SESSION['username'] = $data['name'];
                // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
                $_SESSION['level'] 	  = $data['level'];
                echo '<script>alert("Selamat Datang, Hal Dokter.");document.location="index.php?aksi=p_pasien_v&id=?"</script>';


            }elseif ($data['level'] == 'apoteker'){
                $_SESSION['username'] = $data['name'];
                // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
                $_SESSION['level'] 	  = $data['level'];
                echo '<script>alert("Selamat Datang, Hal Apoteker.");document.location="index.php?aksi=obat_v&id=?"</script>';

            }



        }else{
            echo '<script>
                            alert(" Gagal Masuk, mungkin katasandi atau username salah");
                        </script>';
        }
        /*return $dat;*/



    }

    function view($id){
        $hasil=1;
        $sql="SELECT * FROM `user` WHERE `id_user` ='$id'";
        $query=mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil=0;
        }
        $data=mysqli_fetch_array($query);
        return $data;
    }

    function getUser($id){
        $sql="SELECT * FROM `user` WHERE `id_user` ='$id'";
        $query=mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil=0;
        }
        $data=mysqli_fetch_array($query);
        return $data;

    }

    //SPESIALIS OBAT MEDIS
    //tambah obat medis
    function medis_i(){
        //kode disini
    }
    //edit obat medis
    function medis_e(){
        //kode disini
    }
    //haspus obat medis
    function medis_h(){
        //kode disini
    }
    //tampilkan obat medis
    function medis_v(){
        //kode disini
    }
    //detail obat medis
    function medis_d(){
     //kode disini
    }
    //id otomatis obat medis
    function medis_id(){
        //kode disini
    }

    //PENYAKIT
    //tambah penyakit
    function penyakit_i($id_p,$id_j,$nm_p,$desk_p){
        //kode disini
        $hasil=1;
        $sql = "INSERT INTO `penyakit` (`id_penyakit`,`id_jenis`,`nama_penyakit`,`desk_penyakit`) VALUES ('$id_p','$id_j','$nm_p','$desk_p')";
        $query = mysqli_query($this->konek_db,$sql);
        if(!$query){
            $hasil=0;
        }
        return $hasil;
    }
    //edit penyakit
    function penyakit_e(){
        //kode disini
    }
    //haspus penyakit
    function penyakit_h(){
        //kode disini
    }
    //tampilkan penyakit
    function penyakit_v(){
        //kode disini
        $sql ="SELECT * FROM `penyakit`";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        return $query;
    }

    //tampil join penyakit_jenis
    function joinp_v(){
        $hasil=1;
        $sql = "SELECT penyakit.id_penyakit, penyakit.nama_penyakit, penyakit.desk_penyakit, jenis_penyakit.nama_jenis FROM penyakit INNER JOIN jenis_penyakit ON penyakit.id_jenis=jenis_penyakit.id_jenis;";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil=0;
        }
        return $query;
    }
    //detail penyakit
    function penyakit_d(){
        //kode disini
    }
    //id otomatis penyakit
    function penyakit_id(){
        //kode disini
        $hasil=1;
        $query ="SELECT max(id_penyakit) as maxKode FROM penyakit ";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $show_cod=mysqli_fetch_array($result);
        $get_cod=$show_cod['maxKode'];
        $kode_int=(int)substr($get_cod,3,3);
        $kode_int++;

        $char="Pk";
        $v_codes=$char.sprintf("%03s",$kode_int)."IT";
        return $v_codes;

    }

    //JENIS PENYAKIT
    //input jenis penyakit
    function jp_i($id_jenis,$nm_jenis){
        $hasil=1;
        $sql = "INSERT INTO `jenis_penyakit` (`id_jenis`,`nama_jenis`) VALUES ('$id_jenis','$nm_jenis')";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil=0;
        }
        return $hasil;

    }
    //tampil jenis penyakit
    function jp_v(){
        $nilai =1;
        $sql = "SELECT * FROM `jenis_penyakit`";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $nilai= 0;
        }
        return $query;
    }
    //hapus jenis penyakit
    function jp_h($id){
        $sql = "DELETE FROM `jenis_penyakit` WHERE id_jenis='{$id}'";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        return $query;
    }
    //detail jenis penyakit
    function jp_d($id){
        $sql = "SELECT * FROM `jenis_penyakit` WHERE id_jenis='{$id}'";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        $data = mysqli_fetch_array($query);
        return $data;
    }
    //edit jenis penyakit
    function jp_e($id,$nm_jenis){
        $hasil =1;
        $sql = "UPDATE `jenis_pegawai` SET `nama_jenis`='$nm_jenis' WHERE id_jenis='{$id}'";
        $query = mysqli_query($this->konek_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        return $hasil;

    }
    //id otomatis jenis penyakit
    function jp_id(){

    }

    //JENIS PENYAKIT
    //input jenis penyakit
    //tampil jenis penyakit
    //hapus jenis penyakit
    //detail jenis penyakit
    //edit jenis penyakit
    //id otomatis jenis penyakit

    //PEGAWAI
    //tambah pegawai
    function pegawai_i($id_pegawai,$id_tipe,$nama,$pin_pegawai){
        //kode disini
        $hasil=1;
        $query="INSERT INTO `pegawai` (`id_pegawai`,`id_tipe`,`nama_pegawai`,`pin_pegawai`) VALUES ( '$id_pegawai','$id_tipe','$nama', '$pin_pegawai')";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //edit pegawai
    function pegawai_e($id,$id_pegawai,$id_tipe,$nama,$pin_pegawai){
        //kode disini
        $hasil=1;
        $query="UPDATE `pegawai` SET `id_pegawai`='$id_pegawai',`id_tipe`='$id_tipe',`nama_pegawai`='$nama',`pin_pegawai`='$pin_pegawai' WHERE id_pegawai='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //haspus pegawai
    function pegawai_h($id){
        //kode disini
        $hasil=1;
        $query="DELETE FROM `pegawai`  WHERE id_pegawai='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if(!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //tampilkan pegawai
    function pegawai_v(){
        //kode disini
        $hasil=1;
        $query="SELECT * FROM pegawai";
        $result=mysqli_query($this->konek_db,$query);
        if (!$query){
            $hasil=0;
        }
        return $result;
    }
    //detail pegawai
    function pegawai_d($id){
        //kode disini
        $hasil=1;
        $query="SELECT * FROM pegawai WHERE id_pegawai='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $data=mysqli_fetch_array($result);
        return $data;
    }
    //id otomatis pegawai
    function pegawai_id(){
        //kode disini
        $hasil=1;
        $query ="SELECT max(id_pegawai) as maxKode FROM pegawai ";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $show_cod=mysqli_fetch_array($result);
        $get_cod=$show_cod['maxKode'];
        $kode_int=(int)substr($get_cod,3,3);
        $kode_int++;

        $char="PG";
        $v_codes=$char.sprintf("%03s",$kode_int)."WAI";
        return $v_codes;
    }

    //PASIEN
    //tambah pasien
    function pasien_i($id_p,$no_iden,$tipe_iden,$nama,$jk,$tempat,$tgl,$alamat,$tlp,$tgl_reg){
        //kode disini
        $hasil=1;
        $query="INSERT INTO `pasien` (`id_pasien`,`no_identitas`,`tipe_identitas`,`nama_pasien`,`jk_pasien`,`tempat_lahir`,`tgl_lahir`,`alamat_pasien`,`telepon`,`tgl_register`) VALUES ('$id_p','$no_iden','$tipe_iden','$nama','$jk','$tempat','$tgl','$alamat','$tlp','$tgl_reg')";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //edit pasien
    function pasien_e($id,$id_p,$no_iden,$tipe_iden,$nama,$jk,$tempat,$tgl,$alamat,$tlp,$tgl_reg){
        //kode disini
        $hasil=1;
        $query="UPDATE `pasien` SET `id_pasien`='$id_p',`no_identitas`='$no_iden',`tipe_identitas`='$tipe_iden',`nama_pasien`='$nama',`jk_pasien`='$jk',`tempat_lahir`='$tempat',`tgl_lahir`='$tgl',`alamat_pasien`='$alamat',`telepon`='$tlp',`tgl_register`='$tgl_reg' WHERE id_pasien='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //haspus pasien
    function pasien_h($id){
        //kode disini
        $hasil=1;
        $query="DELETE FROM `pasien` WHERE id_pasien='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;
    }
    //tampilkan pasien
    function pasien_v(){
        //kode disini
        $hasil=1;
        $query="SELECT * FROM pasien order by id_pasien desc ";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $result;
    }
    //detail pasien
    function pasien_d($id){
        //kode disini
        $hasil=1;
        $query="SELECT * FROM `pasien` WHERE id_pasien='{$id}'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $data=mysqli_fetch_array($result);
        return $data;
    }

    //tampilkan pasien
    function pasien_sc($id){
        //kode disini
        $hasil=1;
        $query="SELECT * FROM pasien WHERE id_pasien LIKE '%".$id."%'";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $result;
    }



    //id otomatis pasien
    function pasien_id(){
        //kode disini
        $hasil=1;
        $query ="SELECT max(id_pasien) as maxKode FROM pasien";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        $show_cod=mysqli_fetch_array($result);
        $get_cod=$show_cod['maxKode'];
        $kode_int=(int)substr($get_cod,3,3);
        $kode_int++;

        $char="PS";
        $v_codes=$char.sprintf("%03s",$kode_int)."EN";
        return $v_codes;
    }

    //tindakan
    function tindakan_v($id_t,$nm_t,$desk_t){

        //kode disini
        $hasil=1;
        $query="INSERT INTO `tindakan` (`id_tindakan`,`nama_tindakan`,`desk_tindakan`) VALUES ('$id_t','$nm_t','$desk_t')";
        $result=mysqli_query($this->konek_db,$query);
        if (!$result){
            $hasil=0;
        }
        return $hasil;

    }















}