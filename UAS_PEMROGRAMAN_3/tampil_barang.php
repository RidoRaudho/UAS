<h3>data barang</h3>  
<?php
include "koneksi.php" ;
include ('header.php');

$query_view= mysqli_query($koneksi,"select * from barang");
?>
    </br>
    <?php
    echo '<a href="input_barang.php" class="btn btn-danger">Tambah barang</a>';
    ?>
    <table class="table table-bordered" border="1">
    <tr>
        <td>nama</td>
        <td>kategori id</td>
        <td>satuan id</td>
        <td colspan="4">Aksi</td>
    </tr>
    <?php
    $no=1;
    while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['kategori_id'];?></td>
        <td><?php echo $tampil['satuan_id'];?></td>
        <?php { echo '<td><a href="edit_barang.php?id_barang='.$tampil["id_barang"].'">Edit</a></td>';
        echo '<td><a href="hapus_barang.php?id_barang='.$tampil["id_barang"].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
    </tr>
<?php }?>
</table>
<?php 
include ('footer.php');
?>