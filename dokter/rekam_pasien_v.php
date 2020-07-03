<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 3:21 PM
 */

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
                        ID Pasien
                    </th>
                    <th>
                        Nama Pasien
                    </th>
                    <th>
                        Dokter
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
                                <td><span type="text"></span></td>
                                <td></td>
                                <td>
                                    
                                </td>
                                
                                 <td>
                                   
                                    <a class="btn btn-warning btn-sm " href="index.php?aksi=jp_e&id=" disabled="true">Periksa</a>
                                    <a class="btn btn-warning btn-sm " href="index.php?aksi=jp_e&id=" disabled="true">Resep Obat</a>
                                    <a class="btn btn-warning btn-sm " href="index.php?aksi=jp_e&id=" disabled="true">Tindakan Medis</a>
                                   
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



