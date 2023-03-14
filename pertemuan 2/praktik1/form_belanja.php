<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <form method="GET" action="form_belanja.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
        <h2>Form Belanja</h2>
        <hr />
        <div class="container px-3">
            <div class="form-group row">
                <label for="custname" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input name="customer_name" id="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="baju" name="produk" id="baju" type="radio" class="custom-control-input" required>
                        <label for="baju" class="custom-control-label">Baju</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="topi" name="produk" id="topi" type="radio" class="custom-control-input" required>
                        <label for="topi" class="custom-control-label">Topi</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="jamtangan" name="produk" id="jamtangan" type="radio" class="custom-control-input" required>
                        <label for="jamtangan" class="custom-control-label">Jam Tangan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input name="jumlah_beli" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <p class="my-1">List Harga</p>
                <ol>
                    <li>Baju: 100.000</li>
                    <li>Topi: 20.000</li>
                    <li>Jam Tangan: 150.000</li>
                </ol>
            </div>
        </div>
    </form>



    <?php
    if (isset($_GET['submit'])){

    $custname = $_GET['customer_name'];
    $produk = $_GET['produk'];
    $jumlah = $_GET['jumlah_beli'];

    switch ($produk) {
        case "baju":
            $total = $jumlah * 100000;
            break;
        case "topi":
            $total = $jumlah * 20000;
            break;
        case "jamtangan":
            $total = $jumlah * 150000;
            break; 
    }

    echo '<br>Nama customer : ' . $custname;
    echo '<br>Nama produk : ' . $produk;
    echo '<br>Jumlah beli : ' . $jumlah;
    echo '<br>harga beli : ' . $total;
    

    }
    ?>
</body>

</html>