<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

$databuah1 = [
  'id'=>'fm1',
  'Nama'=>'Strawberry',
  'Warna'=>'Merah',
  'Stok'=>'90Kg',
  'Harga'=>'Rp. 50.000/Kg',
  'Deskripsi'=>'Buah segar ini memiliki kandungan antioksidan dan vitamin C yang dapat membantu tubuh melawan rediakan bebas'
];
$databuah2 = [
  'id'=>'fm2',
  'Nama'=>'Mangga',
  'Warna'=>'Orange',
  'Stok'=>'45Kg',
  'Harga'=>'Rp. 17.000/Kg',
  'Deskripsi'=>'Mangga mengand Vitammin A, C, K serta dapat menurunkan tekanan darah dsb'
];

$databuah3 = [
  'id'=>'fm3',
  'Nama'=>'Srikaya',
  'Warna'=>'Hijau',
  'Stok'=>'25Kg',
  'Harga'=>'Rp. 25.000/Kg',
  'Deskripsi'=>'Buah srikaya juga mengandung potasium yang tinggi, sehingga menjadikannya baik untuk mengatur tingkat tekanan darah'
];

$databuah4 = [
  'id'=>'fm4',
  'Nama'=>'Manggis',
  'Warna'=>'Unggu',
  'Stok'=>'70Kg',
  'Harga'=>'Rp. 45.000/Kg',
  'Deskripsi'=>'Manggis mengandung serat yang sangat penting untuk kesehatan pencernaan, sementara diet tinggi serat dapat membantu meningkatkan keteraturan usus'
];

$databuah5 = [
  'id'=>'fm5',
  'Nama'=>'Buah Naga',
  'Warna'=>'Merah',
  'Stok'=>'90Kg',
  'Harga'=>'Rp. 25.000/Kg',
  'Deskripsi'=>'Buah naga juga mengandung vitamin A. Kandungan vitamin ini menjadi salah satu manfaat dari buah naga yang dapat meningkatkan sistem kekebalan tubuh dan mencegah infeksi'
];

$m_databuah = [$databuah1, $databuah2, $databuah3, $databuah4, $databuah5]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($m_databuah as $data){ ?>
        <tr>
          <td><?= $data['id'];?></td>
          <td><?= $data['Nama'];?></td>
          <td><?= $data['Warna'];?></td>
          <td><?= $data['Stok'];?></td>
          <td><?= $data['Harga'];?></td>
          <td><?= $data['Deskripsi'];?></td>
        </tr>
        <?php } ?>
          
        
      </tbody>
    </table>
  </div>
</body>
</html>