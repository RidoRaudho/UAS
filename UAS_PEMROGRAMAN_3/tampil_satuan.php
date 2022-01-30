<h3>data satuan</h3>  
<?php
include "koneksi.php" ;
include ('header.php');

$query_view= mysqli_query($koneksi,"select * from satuan");
?>
    </br>
    <?php
    echo '<a href="input_satuan.php" class="btn btn-danger">Tambah satuan</a>';
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
        <?php { echo '<td><a href="edit_satuan.php?id_satuan='.$tampil["id_satuan"].'">Edit</a></td>';
        echo '<td><a href="hapus_satuan.php?id_satuan='.$tampil["id_satuan"].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
    </tr>
<?php }?>
</table>
<?php 
include ('footer.php');
?>