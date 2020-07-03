<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/12/18
 * Time: 12:12 AM
 */



$vc= New konfig($konek_db);
$vewc= $vc->v_cod();

if ($_POST){
    $id_dok = $_POST["id_dokter_php"];
    $nama_dok = $_POST["nama_dokter_php"];
    $alamat_dok = $_POST["alamat_dokter_php"];
    $telepon_dok = $_POST["telepon_dokter_php"];

    $dok = New konfig($konek_db);
    $dok->i_dok($id_dok,$nama_dok,$alamat_dok,$telepon_dok);
/*    $dok->v_cod();*/
    /*header('location:index.php?aksi=&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=dok_v&id=?"
                </script> </html>';

}

?>


<!--
<form action="" method="post" role="form">
    <input type="text" name="id_dokter_php" placeholder="masukkan Nama Dokter" class="form-control"  value="<?php /*echo $vewc */?>"  /><br>
    <input type="text" name="nama_dokter_php" placeholder="masukkan Nama Dokter" class="form-control"/><br>
    <input type="text" name="alamat_dokter_php" placeholder="masukkan Alamat Dokter" class="form-control"/><br>
    <input type="text" name="telepon_dokter_php" placeholder="masukkan Telepon Dokter" class="form-control"/><br>-->
<!--    <select class="form-control" name="spesialis_dokter">
        <option value="jjjj">ddd</option>
    </select>--><br>
    <!--<button type="submit" class="btn btn-success" value="Add" ></button>

</form>


        <a type="button" class="btn btn-success" href="index.php?aksi=spl&id=?"> spl</a>-->


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
                                        <span type="text" ><?php echo $vewc ?></span>
                                        <input type="hidden" name="id_dokter_php" value="<?php echo $vewc ?>"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Lengkap</label>
                                        <input type="text" name="nama_dokter_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat Lengkap</label>
                                        <input type="text" name="alamat_dokter_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">No Telp</label>
                                        <input type="text" name="telepon_dokter_php"  class="form-control td-number" required>
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

