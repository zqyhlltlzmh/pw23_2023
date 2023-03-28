<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Data Pelanggan</h2>
    <br/>
    <a href="list_produk.php">Kembali</a>
    <br/>
    <br/>
    <h3>EDIT DATA PELANGGAN</h3>

    <?php
    include 'dbkoneksi.php';
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        $sql = "SELECT * FROM produk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
    ?>
        <form method="post" action="proses_produk.php">
            <table>
                <tr class="form-group row">
                    <td for="kode" class="col-4 col-form-label">Kode</td>
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-anchor"></i>
                        </div>
                    </div> 
                    <td>
                        <input id="kode" name="kode" type="text" class="form-control" value="<?=$row['kode']?>">
                    </td>
                </tr>
                <tr class="form-group row">
                    <td for="nama" class="col-4 col-form-label">Nama Produk</td>
                    <td>
                        <input id="nama" name="nama" type="text" class="form-control" value="<?=$row['nama']?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td>
                    <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="<?=$row['harga_beli']?>">

                    </td>
                </tr>
                <tr class="form-group row">
                    <td for="nama" class="col-4 col-form-label">Stok</td>
                    <td>
                    <input id="stok" name="stok" type="text" class="form-control" value="<?=$row['stok']?>">
                    </td>
                </tr>
                <tr>
                    <td>Minimum Stok</td>
                    <td>
                    <input id="min_stok" name="min_stok" type="text" class="form-control" value="<?=$row['min_stok']?>">
                    </td>
                </tr>
                <tr>
                    <td for="jenis" class="col-4 col-form-label">Jenis</td>
                    <td class="col-8">
                    <?php
                    $sqljenis = "SELECT * FROM jenis_produk";
                    $rsjenis = $dbh->query($sqljenis);
                    ?>
                    <select id="jenis" name="jenis" class="custom-select">
                        <?php
                        foreach ($rsjenis as $rowjenis) {
                        ?>
                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                        <?php
                        }
                        ?>
                        <!--
                        <option value="1">Elektronik</option>
                        <option value="2">Funiture</option>
                        <option value="3">Makanan</option>
                        <option value="3">Minuman</option>
                        <option value="4">lainnya</option>-->
                    </select>
                    </td>
                </tr>
                <tr>
			        <td> 
                        <?php
                            $button = (empty($_idedit)) ? "Simpan":"Update"; 
                        ?>
                            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>"/>
                            <input type="hidden" name="idedit" value="<?=$_idedit?>"/>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>