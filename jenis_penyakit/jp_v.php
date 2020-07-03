<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 2:21 AM
 */
$getjp = New konfig($konek_db);
$jp = $getjp->jp_v();

?>

<div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabel Jenis Penyakit </h4>
        </div>
        <div class="col-md-2 pull-right">
            <a class="btn btn-sm btn-success pull-left"  href="index.php?aksi=jp_i&id=?">Tambah Jenis Penyakit</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            No.
                        </th>
                        <th>
                            Nama Jenis Penyakit
                        </th>

                        <th>
                            Aksi
                        </th>
                    </thead>

                    <?php
                    $no = 1;
                    if (mysqli_num_rows($jp)>0){
                        while ($data=mysqli_fetch_array($jp)){
                            echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$no.' 
                                </td>
                                <td>
                                    '.$data['nama_jenis'].'
                                </td>
                                
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=jp_h&id='.$data['id_jenis'].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm " href="index.php?aksi=jp_e&id='.$data['id_jenis'].'" disabled="true">edit</a>
                                   
                                </td>                                
                            </tr>
                            </tbody>
                        ';
                            $no++;
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


