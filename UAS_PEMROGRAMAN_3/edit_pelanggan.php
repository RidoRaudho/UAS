<?php
include "koneksi.php" ;
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update pelanggan set
    nama_pelanggan='".$_POST['nama_pelanggan']."',
    no_telp='".$_POST['no_telp']."',
    status='".$_POST['status']."'
    WHERE id_pelanggan ='".$_POST['id_pelanggan']."'");
if($query_edit){
header("location:tampil_pelanggan.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table_bordered" border="1 px">
<input type="hidden" name="id_pelanggan" value="<?php echo $hasil_data['id_pelanggan'];?>">
    <tr>
        <td>nama pelanggan</td>
        <td><input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $hasil_data['nama_pelanggan'];?>"></td>
    </tr>
    <tr>
        <td>no telp</td>
        <td><input type="text" name="no_telp" class="form-control" value="<?php echo $hasil_data['no_telp'];?>"></td>
    </tr>
    <tr>
        <td>status</td>
        <td><input type="text" name="status" class="form-control" value="<?php echo $hasil_data['status'];?>"></td>
    </tr>
    <tr>
    <td><input type="submit" value="rubah data" name="save"></td>
    </tr>
</table>
</form>