<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/20/18
 * Time: 4:50 AM
 */
$id=$_GET['id'];
$ps=New konfig($konek_db);
$ps_h=$ps->pasien_h($id);
if ($ps_h==1){
    /*header('location:index.php?aksi=obat_v&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=pasien_v&id=?"
                </script> </html>';
}else{
    echo 'gagal';
}
?>