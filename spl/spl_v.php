<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/13/18
 * Time: 8:40 AM
 */
$show_dok = New konfig($konek_db);
$show=$show_dok->v_spl();

?>

<!--<table>
    <tr>
        <th>nama spl</th>

    </tr>

    <?php
/*    if (mysqli_num_rows($show)>0){
        while ($data=mysqli_fetch_array($show)){
            echo '
                <tr>
                    <td>'.$data['nama_spesialis'].'</td>

                </tr>
            ';

        }
    }else{
        echo 'empty';
    }
    */?>
</table>-->
<div class="col-md-6">
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tabel Biodata </h4>
        <p class="card-category"> Tabel Biodata Dokter</p>
    </div>
    <div class="col-md-2 pull-right">
        <a class="btn btn-sm btn-success pull-left"  href="index.php?aksi=spl_i&id=?">Tambah Spesialis</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
                <th>
                    No.
                </th>
                <th>
                    ID Spesialis
                </th>
                <th>
                    Nama Spesialis
                </th>

                <th>
                    Aksi
                </th>
                </thead>

                <?php
                $no=1;
                if (mysqli_num_rows($show)>0){
                    while ($data=mysqli_fetch_array($show)){
                        echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$no.'
                                </td>
                                <td>
                                    '.$data['id_spesialis'].'
                                </td>
                                <td>
                                    '.$data['nama_spesialis'].'
                                </td>
                                
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=spl_h&id='.$data['id_spesialis'].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm " href="index.php?aksi=spl_e&id='.$data['id_spesialis'].'" disabled="true">edit</a>
                                   
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





