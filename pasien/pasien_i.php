<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/20/18
 * Time: 4:02 AM
 */
$getpasien = New konfig($konek_db);
$getid = $getpasien->pasien_id();

if($_POST){
    $id_p =$_POST['id_pasien_php'];
    $no_iden = $_POST['no_identitas_php'];
    $tipe_iden = $_POST['tipe_identitas_php'];
    $nama = $_POST['nama_php'];
    $jk = $_POST['jenis_kelamin_php'];
    $tempat = $_POST['tempat_php'];
    $tgl = $_POST['tanggal_php'];
    $alamat = $_POST['alamat_php'];
    $tlp = $_POST['telepon_php'];
    $tgl_reg = $_POST['tgl_register_php'];

    $ps= New konfig($konek_db);
    $ps->pasien_i($id_p,$no_iden,$tipe_iden,$nama,$jk,$tempat,$tgl,$alamat,$tlp,$tgl_reg);

    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=pasien_v&id=?"
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
                        <h4 class="card-title">Tambah Biodata Pasiean </h4>
                        <p class="card-category">Tambahkan Biodata Pasien</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID pasien</label><br>
                                        <span type="text"><?=$getid?></span>
                                        <input type="hidden" name="id_pasien_php"  class="form-control" value="<?=$getid?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">No Identitas</label>
                                        <input type="text" name="no_identitas_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tipe Identitas</label>
                                        <input type="text" name="tipe_identitas_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Pasien</label>
                                        <input type="text" name="nama_php"  class="form-control td-number" required>
                                    </div>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Jenis Kelamin</label><br>
                                        <label class="radio-inline"><input type="radio" name="jenis_kelamin_php" value="Perempuan">Perempuan</label>
                                        <label class="radio-inline"><input type="radio" name="jenis_kelamin_php" value="Laki-laki">laki-laki</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tempat Lahir</label>
                                        <input type="text" name="tempat_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tanggal Lahir</label><br>
                                        <input type="date" name="tanggal_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat </label>
                                        <input type="text" name="alamat_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telepon</label>
                                        <input type="text" name="telepon_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">tangal Registrasi</label><br>
                                        <input type="date" name="tgl_register_php"  class="form-control" required>
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


