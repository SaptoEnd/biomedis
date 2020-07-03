<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/13/18
 * Time: 8:40 AM
 */


$show_dok = New konfig($konek_db);
$show=$show_dok->v_dok();

?>


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tabel Biodata </h4>
        <p class="card-category"> Tabel Biodata Dokter</p>
    </div>
    <div class="col-sm-12 pull-sm-right">
        <a class="btn btn-sm btn-success pull-right"  href="index.php?aksi=tdok&id=?">Tambah Biodata</a>
        <a class="btn btn-sm btn-success pull-right"  href="index.php?aksi=jdw&id=?">Lihat jadwal dokter</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
                <th>
                    ID Dokter
                </th>
                <th>
                    Nama Dokter
                </th>
                <th>
                    Alamat Dokter
                </th>
                <th>
                    Telepon Dokter
                </th>
                <th>
                    Aksi
                </th>
                </thead>

                <?php
                if (mysqli_num_rows($show)>0){
                    while ($data=mysqli_fetch_array($show)){
                        echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$data['id_dokter'].'
                                </td>
                                <td>
                                    '.$data['nama_dokter'].'
                                </td>
                                <td>
                                    '.$data['alamat_dokter'].'
                                </td>
                                <td>
                                    '.$data['telepon_dokter'].'
                                </td>
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=hps&id='.$data['id_dokter'].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm" href="index.php?aksi=edit&id='.$data['id_dokter'].'">edit</a>
                                   
                                </td>                                
                            </tr>
                            </tbody>
                               
                           
                        ';

                    }
                }else{
                    echo '
                     </table>
                     <p style="text-align: center; align-content: center" >Biodata belum ditambahkan</p>
                               
                    ';
                }
                ?>


        </div>
    </div>
</div>



