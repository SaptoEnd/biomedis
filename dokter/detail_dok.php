<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/14/18
 * Time: 4:45 AM
 */
$id=$_GET['id'];
$getDetail = New konfig($konek_db);
$detail=$getDetail->detailDok($id);

?>

<tr>
    <td><?php echo $detail['nama_dokter']?></td>
</tr>
