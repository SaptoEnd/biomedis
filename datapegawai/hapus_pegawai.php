<?php
/*
	include '../koneksi_data_base.php';
	$ID_PEGAWAI = $_GET['ID_PEGAWAI'];
	
	$query = "DELETE FROM pegawai WHERE ID_PEGAWAI = '$ID_PEGAWAI'";
	$sql = mysqli_query($conn, $query);

		header("location:data_pegawai.php")
*/

$id=$_GET['id'];
$pgw=New konfig($konek_db);
$pgw_h=$pgw->pegawai_h($id);
if ($pgw_h==1){
    /*header('location:index.php?aksi=obat_v&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=pgw&id=?"
                </script> </html>';
}else{
    echo 'gagal';
}
?>