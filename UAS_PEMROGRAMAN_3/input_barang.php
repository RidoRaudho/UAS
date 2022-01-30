<?php
include  "koneksi.php" ;

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into barang(nama,kategori_id,satuan_id)
values (
'".$_POST['nama']."',
'".$_POST['kategori_id']."',
'".$_POST['satuan_id']."')");

if($query_input){
header('location:tampil_barang.php');
}else{
    echo mysqli_error();
}
}
include ('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" class="form-control"></td>
    </tr>
    <tr>
        <td>kategori id</td>
        <td><input type="text" name="kategori_id" class="form-control"></td>
    </tr>
    <tr>
        <td>satuan id</td>
        <td><input type="text" name="satuan_id" class="form-control"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" class="btn btn-danger"></td>
    </tr>
</table>
</form>
<?php 
include ('footer.php');
?>