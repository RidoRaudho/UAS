<?php
include "koneksi.php";
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update transaksi set
    nama_transaksi='".$_POST['nama_transaksi']."',
    tgl_transaksi='".$_POST['tgl_transaksi']."',
    harga='".$_POST['harga']."',
    qty='".$_POST['qty']."',
    id_barang='".$_POST['id_barang']."',
    diskon='".$_POST['diskon']."',
    id_pelanggan='".$_POST['id_pelanggan']."'
    WHERE id_transaksi ='".$_POST['id_transaksi']."'");
if($query_edit){
header("location:tampil_transaksi.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table_bordered" border="1 px">
<input type="hidden" name="id_transaksi" value="<?php echo $hasil_data['id_transaksi'];?>">
    <tr>
        <td>nama transaksi</td>
        <td><input type="text" name="nama_transaksi" class="form-control" value="<?php echo $hasil_data['nama_transaksi'];?>"></td>
    </tr>
    <tr>
        <td>tgl transaksi</td>
        <td><input type="text" name="tgl_transaksi" class="form-control" value="<?php echo $hasil_data['tgl_transaksi'];?>"></td>
    </tr>
    <tr>
        <td>harga</td>
        <td><input type="text" name="harga" class="form-control" value="<?php echo $hasil_data['harga'];?>"></td>
    </tr>
    <tr>
        <td>qty</td>
        <td><input type="text" name="qty" class="form-control" value="<?php echo $hasil_data['qty'];?>"></td>
    </tr>
    <tr>
        <td>id barang</td>
        <td><input type="text" name="id_barang" class="form-control" value="<?php echo $hasil_data['id_barang'];?>"></td>
    </tr>
    <tr>
        <td>diskon</td>
        <td><input type="text" name="diskon" class="form-control" value="<?php echo $hasil_data['diskon'];?>"></td>
    </tr>
    <tr>
        <td>id pelanggan</td>
        <td><input type="text" name="id_pelanggan" class="form-control" value="<?php echo $hasil_data['id_pelanggan'];?>"></td>
    </tr>
    <tr>
    <td><input type="submit" value="rubah data" name="save"></td>
    </tr>
</table>
</form>