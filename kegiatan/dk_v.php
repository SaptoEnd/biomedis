<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/2/19
 * Time: 4:09 AM
 */



?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Data Kunjungan </h4>
        <p class="card-category"> Data Semua Kunjungan Pasien</p>
    </div>


    <div class="card-body">
        <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
                <th>
                    No
                </th>
                <th>
                    Waktu Kunjungan
                </th>
                <th>
                    Nama Pasien
                </th>
                <th>
                    Dokter
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
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=hps&id='.$data[''].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm" href="index.php?aksi=edit&id='.$data[''].'">edit</a>
                                   
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

