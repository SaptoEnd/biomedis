<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/3/19
 * Time: 3:08 AM
 */


$id= $_GET['id'];
$getjp = New konfig($konek_db);
$jp = $getjp->jp_h($id);
if ($jp==1){
    echo '
        <script>
        window.location="index.php?aksi=jp_v&id=?"
        </script>
    ';
}
?>