<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 3:08 PM
 */

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
                                   
                                </td>
                                <td>
                                   
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=hps&id= onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm" href="index.php?aksi=edit&id=">edit</a>
                                   
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




