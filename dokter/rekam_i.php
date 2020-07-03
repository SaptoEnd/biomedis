<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 3:10 PM
 */

?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Form Rekam Medis </h4>
                        <p class="card-category">Form Rekam Medis Pasien</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">ID pasien</label><br>
                                        <span type="text"></span>
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
                                        <label class="bmd-label-floating">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin_php"  class="form-control" required>
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

