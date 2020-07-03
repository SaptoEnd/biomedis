<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/20/18
 * Time: 2:55 AM
 */

$id=$_GET['id'];
$pgw= New konfig($konek_db);
$pgw_d=$pgw->pegawai_d($id);

if ($_POST){
    $id_pegawai=$_POST['id_pegawai_php'];
    $id_tipe=$_POST['id_tipe_php'];
    $nama=$_POST['nama_pegawai_php'];
    $pin_pegawai=$_POST['pin_pegawai_php'];

    $pgw->pegawai_e($id,$id_pegawai,$id_tipe,$nama,$pin_pegawai);
    $pgw_d['id_pegawai_php']=$id_pegawai;
    $pgw_d['id_tipe_php']=$id_tipe;
    $pgw_d['nama_pegawai_php']=$nama;
    $pgw_d['pin_pegawai_php']=$pin_pegawai;
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
                                        <span type="text"><?= $pgw_d['id_pegawai']?></span>
                                        <input type="hidden" name="id_pegawai_php" class="form-control" value="<?= $pgw_d['id_pegawai']?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Pegawai </label>
                                        <input type="text" name="nama_pegawai_php"  class="form-control" required value="<?= $pgw_d['nama_pegawai']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Jenis Pegawai</label>
                                        <input type="text" name="id_tipe_php"  class="form-control" required value="<?= $pgw_d['id_tipe']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Pin Pegawai</label>
                                        <input type="text" name="pin_pegawai_php"  class="form-control td-number" required value="<?= $pgw_d['pin_pegawai']?>">
                                    </div>
                                </div><br>
                            </div>
                            <button type="submit" class="btn btn-primary pull-center" >Edit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

