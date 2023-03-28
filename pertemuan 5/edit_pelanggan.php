<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Data Pelanggan</h2>
    <br/>
    <a href="list_pelanggan.php">Kembali</a>
    <br/>
    <br/>
    <h3>EDIT DATA PELANGGAN</h3>

    <?php
    include 'dbkoneksi.php';
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        $sql = "SELECT * FROM pelanggan WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
    ?>
        <form method="post" action="proses_pelanggan.php">
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
                    <td for="nama" class="col-4 col-form-label">Nama</td>
                    <td>
                        <input id="nama" name="nama" type="text" class="form-control" value="<?=$row['nama']?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input id="jk" name="jk"  type="text" class="form-control" value="<?=$row['jk']?>">
                    </td>
                </tr>
                <tr class="form-group row">
                    <td for="nama" class="col-4 col-form-label">Tempat Lahir</td>
                    <td>
                        <input id="tmp_lahir" type="text" name="tmp_lahir" class="form-control" value="<?=$row['tmp_lahir']; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <input type="text" name="tgl_lahir" value="<?=$row['tgl_lahir']; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input id="email" type="text" name="email" value="<?= $row['email']; ?>" >
                    </td>
                </tr>
                <tr>
                    <td for="jenis" class="col-4 col-form-label">Kartu</td>
                    <td class="col-8">
                    <?php
                    $sqlkartu = "SELECT * FROM kartu";
                    $rskartu = $dbh->query($sqlkartu);
                    ?>
                    <select id="kartu_id" name="kartu_id" class="custom-select">
                        <?php
                        foreach ($rskartu as $rowkartu) {
                        ?>
                            <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
                        <?php
                        }
                        ?>
                        <!--
                        <option value="1">Gold Utama</option>
                        <option value="2">Platinum Jaya</option>
                        <option value="3">Silver</option>
                        <option value="4">NON Member</option>-->
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