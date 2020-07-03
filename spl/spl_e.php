<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:12 AM
 */
$id=$_GET['id'];
$spl=New konfig($konek_db);
$get=$spl->dSpl($id);

if ($_POST){
    $id_spl = $_POST["id_spesialis_php"];
    $nama_spl = $_POST["nama_spesialis_php"];

    $spl->spl_e($id,$id_spl,$nama_spl);
    $get['id_spesialis_php']=$id_spl;
    $get['nama_spesialis_php']=$nama_spl;

    /*header('location:index.php?aksi=get&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=spl_v&id=?"
                </script> </html>';

}
?>
<!--
<form action="" method="post" role="form">
    <input type="text" name="id_spesialis_php" placeholder="masukkan ID Dokter" class="form-control"/><br>
    <input type="text" name="nama_spesialis_php" placeholder="masukkan Nama Dokter" class="form-control"/><br>

<br>
    <button type="submit" class="btn btn-success" value="Add" >
</form>-->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Spesialis </h4>
                        <p class="card-category">Form tambahkan spesialis dokter </p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID Spesialis</label><br>
                                        <span type="text"><?php echo $id ?></span>
                                        <input type="hidden" name="id_spesialis_php"  class="form-control" value="<?php echo $id ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Spesialis</label>
                                        <input type="text" name="nama_spesialis_php"  class="form-control" required value="<?= $get['nama_spesialis'] ?>">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-center" >Edit</button>
                            <a type="button" class="btn btn-danger pull-center" href="index.php?aksi=spl_v&id=?" >Batal</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

