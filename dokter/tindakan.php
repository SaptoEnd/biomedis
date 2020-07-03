<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 4:45 AM
 */
$id=$_GET['id'];
$getDetail = New konfig($konek_db);
$detail=$getDetail->pasien_d($id);

if ($_POST){
    $id_t = $_POST["id_pasien_php"];
    $nm_t = $_POST["nama_tndakan_php"];
    $desk_t = $_POST["desk_tindakan_php"];


    $dok = New konfig($konek_db);
    $dok->tindakan_v($id_t,$nm_t,$desk_t);
    /*    $dok->v_cod();*/
    /*header('location:index.php?aksi=&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=dok_v&id=?"
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
                        <h4 class="card-title">Tambah Biodata </h4>
                        <p class="card-category">Tambahkan Biodata Dokter</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID Pasien</label><br>
                                        <span type="text" ><?php echo $detail['id_pasien']?></span>
                                        <input type="hidden" name="id_pasien_php" value="<?php echo $detail['id_pasien']?>"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Tindakan</label>
                                        <input type="text" name="nama_tndakan_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">desk Tindakan</label>
                                        <input type="text" name="desk_tindakan_php"  class="form-control" required>
                                    </div>
                                </div>
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

