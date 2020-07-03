<?php
/*include 'koneksi_data_base.php';
$query = mysqli_query($conn, "SELECT * FROM pegawai ORDER BY ID_PEGAWAI DESC");
*/?><!--

--><?php /*
if (@$_GET['aksi']=='tambah'){
  include "datapegawai/data_pegawai/tambah_pegawai.php";

}elseif(@$_GET['aksi']=='edit'){

  include "saran/form_edit.php";

}else{ }*/

$pgw = New konfig($konek_db);
$pgw_v = $pgw->pegawai_v();

?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tabel Pegawai </h4>
        <p class="card-category"></p>
    </div>
    <div class="col-md-2 pull-right">
        <a class="btn btn-sm btn-success pull-right"  href="index.php?aksi=pgw_i&id=?">Tambah Pegawai</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
                <th>
                    NO.
                </th>
                <th>
                    ID
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Pin Pegawai
                </th>
                <th>
                    Jenis Pegawai
                </th>
                <th>
                    Aksi
                </th>
                </thead>

                <?php
                if (mysqli_num_rows($pgw_v)>0){
                    $no=1;

                    while ($data=mysqli_fetch_array($pgw_v)){
                        echo '
                            <tbody>
                            <tr>
                                <td>
                                    '.$no.'
                                </td>
                                <td>
                                    '.$data['id_pegawai'].'
                                </td>
                                <td>
                                    '.$data['nama_pegawai'].'
                                </td>
                                <td>
                                    '.$data['pin_pegawai'].'
                                </td>
                                <td>
                                    '.$data['id_tipe'].'
                                </td>
                                 <td>
                                    <a class="btn btn-danger btn-sm" href=index.php?aksi=pgw_h&id='.$data['id_pegawai'].' onclick="return confirm (\'Apakah Anda yakin ingin menghapus data ? \')">hapus</a>
                                    <a class="btn btn-warning btn-sm" href="index.php?aksi=pgw_e&id='.$data['id_pegawai'].'">edit</a>
                                   
                                </td>                                
                            </tr>
                            </tbody>
                               
                           
                        ';$no++;

                    }
                }else{
                    echo '
                    </table>
                     <p style="text-align: center; align-content: center" >Data pegawai belum ditambahkan</p>
                    ';
                }
                ?>

        </div>
    </div>
</div>




