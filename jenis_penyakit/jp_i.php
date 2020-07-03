<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 2:21 AM
 */


if ($_POST){
    $id_jenis='';
    $nm_jenis=$_POST['nama_jp_php'];

    $getjp = New konfig($konek_db);
    $jp = $getjp->jp_i($id_jenis,$nm_jenis);

    echo '
        <html>
            <script type="text/javascript">
                window.location="index.php?aksi=jp_v&id=?"
            </script>
        </html>
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
                                        <label class="bmd-label-floating">Nama Jenis Penyakit</label>
                                        <input type="text" name="nama_jp_php"  class="form-control" required>
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
