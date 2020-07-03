<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 6:04 AM
 */
$obat_i=New konfig($konek_db);
$obat=$obat_i->oto_obatCode();

if ($_POST){
    $id_o = $_POST['obat_id_php'];
    $nama_o = $_POST['obat_name_php'];
    $id_bp = $_POST['obat_bpom_php'];
    $satuan = $_POST['obat_satuan_php'];

    $obat= New konfig($konek_db);
    $obat->obat_i($id_o,$nama_o,$id_bp,$satuan);
    /*header('location:index.php?aksi=obat_v&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=obat_v&id=?"
                </script> </html>';

}

?>

<!--<form action="" method="POST" role="form">
    <input name="obat_id_php" class="form-control" placeholder="id" value="<?php /*echo $obat */?>">
    <input name="obat_name_php" class="form-control" placeholder="nama">
    <input name="obat_bpom_php" class="form-control" placeholder="id_bpom">
    <input name="obat_satuan_php" class="form-control" placeholder="satuan">
    <button class="btn btn-success" type="submit">Insert</button>

</form>-->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Obat </h4>
                        <p class="card-category">Tambahkan Obat </p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID Obat</label><br>
                                        <span type="text" ><?php echo $obat ?></span>
                                        <input type="hidden" name="obat_id_php" value="<?php echo $obat ?>"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Obat</label>
                                        <input type="text" name="obat_name_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID BPOM</label>
                                        <input type="text" name="obat_bpom_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Satuan</label>
                                        <input type="text" name="obat_satuan_php"  class="form-control td-number" required>
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
