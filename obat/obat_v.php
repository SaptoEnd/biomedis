<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 6:16 AM
 */
$obat_v =New konfig($konek_db);
$obat=$obat_v->view_o();

?>
<!--
<table>
    <tr>
        <th>NO id</th>
        <th>Nama Obat</th>
        <th>ID Bpom</th>
        <th>Satuan</th>
        <th>Aktion</th>
    </tr>
    <?php
/*    if (mysqli_num_rows($obat)>0){


        while ($data=mysqli_fetch_array($obat)) {


            echo '
        
        <tr>
        <td>' . $data['id_obat'] . '</td>
        <td>' . $data['nama_obat'] . '</td>
        <td>' . $data['id_bpom'] . '</td>
        <td>' . $data['satuan'] . '</td>
        <td>
            <a type="button" class="" href="index.php?aksi=obat_hp&id='.$data['id_obat'].'">Hapus</a>
            <a type="button" class="" href="index.php?aksi=&id=">Edit</a>
            <a type="button" class="" href="index.php?aksi=obat_t&id=?">tambah</a>
        </td>
    </tr>
    
    ';
        }

    }


    */?>

</table>-->

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tabel Obat </h4>
        <p class="card-category"></p>
    </div>
    <div class="col-md-2 pull-right">
        <a class="btn btn-sm btn-success pull-right"  href="index.php?aksi=obat_t&id=?">Tambah Obat</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
                <th>
                    ID Obat
                </th>
                <th>
                    Nama Obat
                </th>
                <th>
                    ID BPOM
                </th>
                <th>
                    Satuan
                </th>
                <th>
                    Aksi
                </th>
                </thead>

                <?php
                if (mysqli_num_rows($obat)>0){
                    while ($data=mysqli_fetch_array($obat)){
                        echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$data['id_obat'].'
                                </td>
                                <td>
                                    '.$data['nama_obat'].'
                                </td>
                                <td>
                                    '.$data['id_bpom'].'
                                </td>
                                <td>
                                    '.$data['satuan'].'
                                </td>
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=obat_hp&id='.$data['id_obat'].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm" href="index.php?aksi=obat_e&id='.$data['id_obat'].'">edit</a>
                                   
                                </td>                                
                            </tr>
                            </tbody>
                               
                           
                        ';

                    }
                }else{
                    echo '
                    </table>
                     <p style="text-align: center; align-content: center" >Obat belum ditambahkan</p>
                    ';
                }
                ?>

        </div>
    </div>
</div>



