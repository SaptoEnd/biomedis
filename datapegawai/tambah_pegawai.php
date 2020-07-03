<?php
/*include 'koneksi_data_base.php';
*/?><!--

--><?php
/*if (isset($_POST['tambah_saran'])) {
  $nama = $_POST['NAMA_PEGAWAI'];
  $pin_pegawai = $_POST['PIN_PEGAWAI'];
  $jenis_pegawai = $_POST['ID_TIPE'];
  $id_pegawai = $_POST['ID_PEGAWAI'];
  
  $query = "INSERT INTO pegawai (NAMA_PEGAWAI, PIN_PEGAWAI, ID_TIPE, ID_PEGAWAI) VALUES ('$nama', '$pin_pegawai', '$jenis_pegawai', '$id_pegawai')";


  $sql = $conn->query($query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    //header("location:?page=pegawai"); //Redirect ke halaman index.php
	echo "Berhasil";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  
  }
}  
*/

$get = New konfig($konek_db);
$getId = $get->pegawai_id();

if ($_POST){
    $id_pegawai=$_POST['id_pegawai_php'];
    $id_tipe=$_POST['id_tipe_php'];
    $nama=$_POST['nama_pegawai_php'];
    $pin_pegawai=$_POST['pin_pegawai_php'];

    $pgw= New konfig($konek_db);
    $pgw->pegawai_i($id_pegawai,$id_tipe,$nama,$pin_pegawai);
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=pgw&id=?"
                </script> </html>';
}

?>



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Pegawai </h4>
                        <p class="card-category">Tambahkan Pegawai </p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID Pegawai</label><br>
                                        <span type="text"><?=$getId?></span>
                                        <input type="hidden" name="id_pegawai_php" class="form-control" value="<?=$getId?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Pegawai </label>
                                        <input type="text" name="nama_pegawai_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Tipe Pegawai </label>
                                    <input type="text" name="id_tipe_php"  class="form-control" required>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Pin Pegawai</label>
                                        <input type="text" name="pin_pegawai_php"  class="form-control td-number" required>
                                    </div>
                                </div><br>
                            </div>
                            <button type="submit" class="btn btn-primary pull-center" >Tambahkan</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
