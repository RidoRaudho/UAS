<h3>data pelanggan</h3>  
<?php
include "koneksi.php" ;
include ('header.php');

$query_view= mysqli_query($koneksi,"select * from pelanggan");
?>
    </br>
    <?php
    echo '<a href="input_pelanggan.php" class="btn btn-danger">Tambah Pelanggan</a>';
    ?>
    <table class="table table-bordered" border="1">
    <tr>
        <td>nama pelanggan</td>
        <td>no telp</td>
        <td>status</td>
        <td colspan="4">Aksi</td>
    </tr>
    <?php
    $no=1;
    while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $tampil['nama_pelanggan'];?></td>
        <td><?php echo $tampil['no_telp'];?></td>
        <td><?php echo $tampil['status'];?></td>
        <?php { echo '<td><a href="edit_pelanggan.php?id_pelanggan='.$tampil["id_pelanggan"].'">Edit</a></td>';
        echo '<td><a href="hapus_pelanggan.php?id_pelanggan='.$tampil["id_pelanggan"].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
    </tr>
<?php }?>
</table>
<?php 
include ('footer.php');
?>