<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/20/18
 * Time: 4:55 AM
 */
$id=$_GET['id'];
$ps= New konfig($konek_db);
$psv=$ps->pasien_d($id);


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


    $ps->pasien_e($id,$id_p,$no_iden,$tipe_iden,$nama,$jk,$tempat,$tgl,$alamat,$tlp,$tgl_reg);
    $psv['id_pasien_php']=$id_p;
    $psv['no_identitas_php']=$no_iden;
    $psv['tipe_identitas_php']=$tipe_iden;
    $psv['nama_php']=$nama;
    $psv['jenis_kelamin_php']=$jk;
    $psv['tempat_php']=$tempat;
    $psv['tanggal_php']=$tgl;
    $psv['alamat_php']=$alamat;
    $psv['telepon_php']=$tlp;
    $psv['tgl_register_php']=$tgl_reg;
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
                        <h4 class="card-title">Edit Biodata Pasiean </h4>
                        <p class="card-category">update Biodata Pasien</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID pasien</label><br>
                                        <span type="text"><?=$psv['id_pasien']?></span>
                                        <input type="hidden" name="id_pasien_php"  class="form-control" value="<?= $psv['id_pasien']?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">No Identitas</label>
                                        <input type="text" name="no_identitas_php"  class="form-control" required value="<?= $psv['no_identitas']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tipe Identitas</label>
                                        <input type="text" name="tipe_identitas_php"  class="form-control" required value="<?= $psv['tipe_identitas']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Pasien</label>
                                        <input type="text" name="nama_php"  class="form-control td-number" required value="<?= $psv['nama_pasien']?>">
                                    </div>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Jenis Kelamin</label>
                                        <label class="radio-inline"><input type="radio" name="jenis_kelamin_php" id="Perempuan" value="Perempuan"<? if($psv['jk_pasien'] == 'Perempuan'){?> checked=""<?}?>>Perempuan</label>
                                        <label class="radio-inline"><input type="radio" name="jenis_kelamin_php" id="Laki-laki" value="Laki-laki"<? if($psv['jk_pasien'] == 'Laki-laki'){?> checked=""<?}?>>Laki-laki</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tempat Lahir</label>
                                        <input type="text" name="tempat_php"  class="form-control" required value="<?= $psv['tempat_lahir']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tanggal Lahir</label>
                                        <input type="text" name="tanggal_php"  class="form-control" required value="<?= $psv['tgl_lahir']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat </label>
                                        <input type="text" name="alamat_php"  class="form-control" required value="<?= $psv['alamat_pasien']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telepon</label>
                                        <input type="text" name="telepon_php"  class="form-control" required value="<?= $psv['telepon']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">tangal Registrasi</label>
                                        <input type="text" name="tgl_register_php"  class="form-control" required value="<?= $psv['tgl_register']?>">
                                    </div>
                                </div>
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



