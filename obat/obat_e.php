<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 8:10 AM
 */
$id=$_GET['id'];
$edit_ob= New konfig($konek_db);
$show_o = $edit_ob->detailObat($id);

if ($_POST){
    $id=$_POST['obat_id_php'];
    $nama_o=$_POST['obat_name_php'];
    $id_bp=$_POST['obat_bpom_php'];
    $satuan=$_POST['obat_satuan_php'];

    $edit_ob->edit_o($id,$nama_o,$id_bp,$satuan);
    $show_o['nama_obat_php']=$nama_o;
    $show_o['id_bpom_php']=$id_bp;
    $show_o['satuan_php']=$satuan;

    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=obat_v&id=?"
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
                        <h4 class="card-title">Edit Obat </h4>
                        <p class="card-category">Edit Obat disini </p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID Obat</label><br>
                                        <span type="text" ><?php echo $id ?></span>
                                        <input type="hidden" name="obat_id_php" value="<?php echo $id ?>"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Obat</label>
                                        <input type="text" name="obat_name_php"  class="form-control" required value="<?php echo $show_o['nama_obat']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID BPOM</label>
                                        <input type="text" name="obat_bpom_php"  class="form-control" required value="<?php echo $show_o['id_bpom']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Satuan</label>
                                        <input type="text" name="obat_satuan_php"  class="form-control td-number" required value="<?php echo $show_o['satuan']?>">
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

