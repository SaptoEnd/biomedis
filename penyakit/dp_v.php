<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 10:47 AM
 */

$getdp = New konfig($konek_db);
$dp = $getdp->joinp_v();


?>

<div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabel Biodata </h4>
            <p class="card-category"> Tabel Biodata Dokter</p>
        </div>
        <div class="col-md-2 pull-right">
            <a class="btn btn-sm btn-success pull-left"  href="index.php?aksi=dp_i&id=?">Tambah Data Penyakit</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">

                <table class="table">
                    <thead class=" text-primary">
                    <th>
                        No.
                    </th>
                    <th>
                        ID Penyakit
                    </th>
                    <th>
                        Jenis Penyakit
                    </th>
                    <th>
                        Nama Penyakit
                    </th>
                    <th>
                        Deskripsi Penyakit
                    </th>
                    <th>
                        Aksi
                    </th>
                    </thead>

                    <?php
                    $no=1;
                    if (mysqli_num_rows($dp)>0){
                        while ($data=mysqli_fetch_array($dp)){
                            echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$no.'
                                </td>
                                <td>'.$data['id_penyakit'].'</td>
                                <td>
                                    '.$data['nama_jenis'].'
                                </td>
                                <td>
                                    '.$data['nama_penyakit'].'
                                </td>
                                <td>
                                    '.$data['desk_penyakit'].'
                                </td>
                                
                                
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=spl_h&id='.$data['id_penyakit'].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm " href="index.php?aksi=spl_e&id='.$data['id_penyakit'].'" disabled="true">edit</a>
                                   
                                </td>                                
                            </tr>
                            </tbody>
                               
                           
                        '; $no++;
                        }
                    }else{
                        echo '
                    </table>
                     <p style="text-align: center; align-content: center" >Data spesialis belum ditambahkan</p>
                    ';
                    }
                    ?>

            </div>
        </div>

    </div>

</div>

