<?php 
    // include database connection
    require_once '../dbkoneksi.php';
?>

<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM pembelian";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_pembelian.php" role="button">Create Pembelian</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk ID</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['produk_id']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['vendor_id']?></td>
            <td>
                <a class="btn btn-primary" href="view_pembelian.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_pembelian.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_pembelian.php?id=<?=$row['id']?>">Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $id++;   
            } 
        ?>
    </tbody>
</table>
