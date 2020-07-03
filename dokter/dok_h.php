<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 1:59 AM
 */
$id=$_GET['id'];
$gethps = New konfig($konek_db);
$hps = $gethps->hps($id);
if ($hps==1){
    /*header('Location: index.php');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
                        window.location = "index.php?aksi=dok_v&id=?"
                </script> </html>';

}else{
    echo 'gagal';
}
?>