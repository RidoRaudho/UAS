<?php
include  "koneksi.php" ;

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into pelanggan(nama_pelanggan,no_telp,status)
values (
'".$_POST['nama_pelanggan']."',
'".$_POST['no_telp']."',
'".$_POST['status']."')");
if($query_input){
header('location:tampil_pelanggan.php');
}else{
    echo mysqli_error();
}
}
include ('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
        <td>nama pelanggan</td>
        <td><input type="text" name="nama_pelanggan" class="form-control"></td>
    </tr>
        <tr>
        <td>no telp</td>
        <td><input type="text" name="no_telp" class="form-control"></td>
    </tr>
        <tr>
        <td>status</td>
        <td><input type="text" name="status" class="form-control"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" class="btn btn-danger"></td>
    </tr>
</table>
</form>
<?php 
include ('footer.php');
?>