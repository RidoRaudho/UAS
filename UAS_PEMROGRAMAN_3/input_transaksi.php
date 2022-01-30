<?php
include  "koneksi.php" ;

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan)
values (
'".$_POST['nama_transaksi']."',
'".$_POST['tgl_transaksi']."',
'".$_POST['harga']."',
'".$_POST['qty']."',
'".$_POST['id_barang']."',
'".$_POST['diskon']."',
'".$_POST['id_pelanggan']."')");
if($query_input){
header('location:tampil_transaksi.php');
}else{
    echo mysqli_error();
}
}
include ('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
        <td>nama transaksi</td>
        <td><input type="text" name="nama_transaksi" class="form-control"></td>
    </tr>
        <tr>
        <td>tgl transaksi</td>
        <td><input type="text" name="tgl_transaksi" class="form-control"></td>
    </tr>
        <tr>
        <td>harga</td>
        <td><input type="text" name="harga" class="form-control"></td>
    </tr>
        <tr>
        <td>qty</td>
        <td><input type="text" name="qty" class="form-control"></td>
    </tr>
        <tr>
        <td>id barang</td>
        <td><input type="text" name="id_barang" class="form-control"></td>
    </tr>
        <tr>
        <td>diskon</td>
        <td><input type="text" name="diskon" class="form-control"></td>
    </tr>
        <tr>
        <td>id pelanggan</td>
        <td><input type="text" name="id_pelanggan" class="form-control"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" class="btn btn-danger"></td>
    </tr>
</table>
</form>
<?php 
include ('footer.php');
?>