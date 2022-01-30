<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
if($query_delete) {
    header("location:tampil_transaksi.php");
}else{
    echo mysqli_error();
}
?>