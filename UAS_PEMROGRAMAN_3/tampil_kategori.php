<h3>data kategori</h3>  
<?php
include "koneksi.php" ;
include ('header.php');

$query_view= mysqli_query($koneksi,"select * from kategori");
?>
    </br>
    <?php
    echo '<a href="input_kategori.php" class="btn btn-danger">Tambah kategori</a>';
    ?>
    <table class="table table-bordered" border="1">
    <tr>
        <td>nama</td>
        <td colspan="4">Aksi</td>
    </tr>
    <?php
    $no=1;
    while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $tampil['nama'];?></td>
        <?php { echo '<td><a href="edit_kategori.php?id_kategori='.$tampil["id_kategori"].'">Edit</a></td>';
        echo '<td><a href="hapus_kategori.php?id_kategori='.$tampil["id_kategori"].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
    </tr>
<?php }?>
</table>
<?php 
include ('footer.php');
?>