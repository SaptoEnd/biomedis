<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/20/18
 * Time: 4:41 AM
 */
$id=$_GET['id'];
$ps= New konfig($konek_db);
$get_ps=$ps->pasien_d($id);
?>

<style>
    .yu{
        width:10px;

    }
</style>
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tabel Pasien </h4>
        <p class="card-category"></p>
    </div>
    <div class="col-sm-12 pull-sm-right">

    </div>


    <div class="card-body">
        <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
                <th>
                    ID Pasien
                </th>

                <th>
                    Nama Pasien
                </th>
                <th>
                    Jenis Kelamin
                </th>

                <th>
                    Alamat
                </th>
                <th>
                    Telepon
                </th>
                <th>
                    Riwayat Sakit
                </th>
                <th>
                    Aksi
                </th>
                </thead>

                <?php
                if ($data=$get_ps){

                        echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$data['id_pasien'].'
                                </td>
                               
                                <td>
                                    '.$data['nama_pasien'].'
                                </td>
                                <td>
                                    '.$data['jk_pasien'].'
                                </td>
                                
                                <td>
                                    '.$data['alamat_pasien'].'
                                </td>
                                <td>
                                    '.$data['telepon'].'
                                </td>
                                <td>
                                    '.$data['tgl_register'].'
                                </td>
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=pasien_h&id='.$data['id_pasien'].' ">RK</a>
                                    
                                   
                                </td>                                
                            </tr>
                            </tbody>
                               
                           
                        ';

                    }else{
                    echo '
                    </table>
                     <p style="text-align: center; align-content: center" >Data pasien belum ditambahkan</p>
                    ';
                }
                ?>

        </div>
    </div>
</div>




