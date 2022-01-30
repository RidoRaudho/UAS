<?php
include "koneksi.php";
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update kategori set
    nama='".$_POST['nama']."'
    WHERE id_kategori ='".$_POST['id_kategori']."'");
if($query_edit){
header("location:tampil_kategori.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from kategori where id_kategori='".$_GET['id_kategori']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table_bordered" border="1 px">
<input type="hidden" name="id_kategori" value="<?php echo $hasil_data['id_kategori'];?>">
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    </tr>
    <tr>
    <td><input type="submit" value="rubah data" name="save"></td>
    </tr>
</table>
</form>