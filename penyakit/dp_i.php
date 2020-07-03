<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 10:47 AM
 */
$getid= New konfig($konek_db);
$id= $getid->penyakit_id();

if ($_POST){
    $id_p = $_POST['id_p_php'];
    $id_j = $_POST['jenis_penyakit_php'];
    $nm_p = $_POST['nama_p_php'];
    $desk_p = $_POST['desk_p_php'];

    $get= New konfig($konek_db);
    $get->penyakit_i($id_p,$id_j,$nm_p,$desk_p);
        echo '
            <script>
                window.location="index.php?aksi=dp_v&id=?"
            </script>
        ';
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
                        <h4 class="card-title">Form Input </h4>
                        <p class="card-category">Tambahkan Jenis Penyakit</p>
                    </div>

                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID Penyakit</label><br>
                                        <span type="text"><?= $id?></span>
                                        <input type="hidden" name="id_p_php"  class="form-control" value="<?= $id?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Penyakit</label>
                                        <input type="text" name="nama_p_php"  class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Deskripsi Penyakit</label>
                                        <input type="text" name="desk_p_php"  class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="select-1">Jenis Penyakit</label>
                                            <select class="form-control" id="select-1" name="jenis_penyakit_php" required>
                                                <?php
                                                $getdp=new Penyakit($konek_db);
                                                $dp=$getdp->jp_v();
                                                while($hkt=mysqli_fetch_array($dp)){
                                                    ?>
                                                    <option value="<?php echo $hkt['id_jenis'] ?>"> <?php echo $hkt['nama_jenis'] ?></option>

                                                <?php } ?>
                                            </select>

                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-center" >Tambahkan</button>
                            <a type="button" class="btn btn-danger pull-center" href="index.php?aksi=dp_v&id=?">Batal</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

