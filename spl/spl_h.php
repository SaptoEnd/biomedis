<?php

$id=$_GET['id'];
$spl=New konfig($konek_db);
$show_spl=$spl->hpsSpl($id);
if ($show_spl==1){
    /*header('location:index.php?aksi=obat_v&id=?');*/
    /*header('location:index.php?aksi=obat_v&id=?');*/
    echo '<html> <script type="text/javascript">
    window.location = "index.php?aksi=spl_v&id=?"
</script> </html>';
}else{
    echo 'gagal';
}

?>