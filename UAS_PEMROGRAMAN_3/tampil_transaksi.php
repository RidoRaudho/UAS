<h3>data transaksi</h3>  
<?php
include "koneksi.php" ;
include ('header.php');

$query_view= mysqli_query($koneksi,"select * from transaksi");
?>
    </br>
    <?php
    echo '<a href="input_transaksi.php" class="btn btn-danger">Tambah Transaksi</a>';
    ?>
    <table class="table table-bordered" border="1">
    <tr>
        <td>nama transaksi</td>
        <td>tgl transaksi</td>
        <td>harga</td>
        <td>qty</td>
        <td>id barang</td>
        <td>diskon</td>
        <td>id pelanggan</td>
        <td colspan="4">Aksi</td>
    </tr>
    <?php
    $no=1;
    while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $tampil['nama_transaksi'];?></td>
        <td><?php echo $tampil['tgl_transaksi'];?></td>
        <td><?php echo $tampil['harga'];?></td>
        <td><?php echo $tampil['qty'];?></td>
        <td><?php echo $tampil['id_barang'];?></td>
        <td><?php echo $tampil['diskon'];?></td>
        <td><?php echo $tampil['id_pelanggan'];?></td>
        <?php { echo '<td><a href="edit_transaksi.php?id_transaksi='.$tampil["id_transaksi"].'">Edit</a></td>';
        echo '<td><a href="hapus_transaksi.php?id_transaksi='.$tampil["id_transaksi"].'" onclick="return confirm("yakin keluar?")">Hapus</a></td>';}?>
    </tr>
<?php }?>
</table>
<?php 
include ('footer.php');
?>