<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 3:56 AM
 */
$id=$_GET['id'];
$up_dok = New konfig($konek_db);
$get_updok = $up_dok->detailDok($id);

if ($_POST){
    $id =$_POST['id_dokter_php'];
    $nama_dok =$_POST['nama_dokter_php'];
    $alamat_dok =$_POST['alamat_dokter_php'];
    $telepon_dok =$_POST['telepon_dokter_php'];

    $up_dok->editDOk($id,$nama_dok,$alamat_dok,$telepon_dok);
    $get_updok['nama_dokter_php']=$nama_dok;
    $get_updok['alamat_dokter_php']=$alamat_dok;
    $get_updok['telepon_dokter_php']=$telepon_dok;

    /*header('location: index.php');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=dok_v&id=?"
                </script> </html>';

}
?>
<!--<form action="" method="POST" role="form">
    <input type="hidden" name="id_dokter" placeholder="masukkan Nama Dokter" class="form-control"  value="<?php /*echo $id */?>"  /><br>
    <input type="text" name="nama_dokter" placeholder="masukkan Nama Dokter" class="form-control" value="<?php /*echo $get_updok['nama_dokter'] */?>"/><br>
    <input type="text" name="alamat_dokter" placeholder="masukkan Alamat Dokter" class="form-control" value="<?/*= $get_updok['alamat_dokter'] */?>"/><br>
    <input type="text" name="telepon_dokter" placeholder="masukkan Telepon Dokter" class="form-control" value="<?/*= $get_updok['telepon_dokter']*/?>"/><br>
<br>
    <button type="submit" class="btn btn-primary">Simpan</button>

</form>-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Biodata </h4>
                        <p class="card-category">Tambahkan Biodata Dokter</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID Dokter</label><br>
                                        <span type="text" ><?php echo $id ?></span>
                                        <input type="hidden" name="id_dokter_php" value="<?php echo $id ?>"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Lengkap</label>
                                        <input type="text" name="nama_dokter_php"  class="form-control" value="<?php echo $get_updok['nama_dokter'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat Lengkap</label>
                                        <input type="text" name="alamat_dokter_php"  class="form-control" value="<?= $get_updok['alamat_dokter'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">No Telp</label>
                                        <input type="text" name="telepon_dokter_php"  class="form-control td-number" value="<?= $get_updok['telepon_dokter']?>" required>
                                    </div>
                                </div><br>
                            </div>
                            <button type="submit" class="btn btn-primary pull-center" >Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

