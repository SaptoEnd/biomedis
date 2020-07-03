<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/2/19
 * Time: 4:17 AM
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
                        <h4 class="card-title">Formulir Kunjungan</h4>
                        <p class="card-category">Formulir Kunjungan Baru Pasien</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label class="bmd-label-floating small">ID Kunjungan</label>
                                            <span type="text"></span>
                                            <input type="text" name="id_kunjungan_php"  class="form-control" value="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating small">Waktu Kunjungan</label>
                                        <span type="text"></span>
                                        <input type="text" name="id_kunjungan_php"  class="form-control" value="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID Pasien</label>
                                        <input type="text" name="id_pasien_php"  class="form-control" required>
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
                                        <label class="bmd-label-floating">Alamat Pasien</label>
                                        <input type="text" name="alamat_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telepon Pasien</label>
                                        <input type="text" name="telepon_php"  class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-center" >Simpan</button>
                            <a type="button" class="btn btn-danger pull-center" href="index.php?aksi=?&id=?" >Batal</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



