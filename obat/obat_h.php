<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 6:49 AM
 */
$id=$_GET['id'];
$obt=New konfig($konek_db);
$show_obat=$obt->obat_hps($id);
if ($show_obat==1){
    /*header('location:index.php?aksi=obat_v&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=obat_v&id=?"
                </script> </html>';
}else{
    echo 'gagal';
}