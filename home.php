<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/20/18
 * Time: 6:25 AM
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
                    <h4 class="card-title">Tambah Spesialis </h4>
                    <p class="card-category">Form tambahkan spesialis dokter </p>
                </div>
                <div class="card-body">
                    <form action="master/cek_log.php" method="post" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating small">Username</label><br>
                                    <!-- <span type="text" ><?php /*echo $obat */?></span>-->
                                    <!--  <input type="tex" name="id_spesialis_php" value="<?php /*echo $obat */?>"  class="form-control" >-->
                                    <input type="tex" name="username"  class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" name="password"  class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-center" >Login</button>
                       <!-- <a type="button" class="btn btn-danger pull-center" href="" >Batal</a>-->
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


