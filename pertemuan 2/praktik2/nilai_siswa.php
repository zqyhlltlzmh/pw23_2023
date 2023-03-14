<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>

    <?php

    if (isset($_POST['proses'])) {

        //variable untuk menangkap data
        $nama_siswa = $_POST['nama_lengkap'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        

        $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

        // tampilkan data dari variable
        echo '<br>Nama : ' . $nama_siswa;
        echo '<br>Mata kuliah : ' . $mata_kuliah;
        echo '<br>Nilai uts : ' . $nilai_uts;
        echo '<br>Nilai uas : ' . $nilai_uas;
        echo '<br>Nilai tugas : ' . $nilai_tugas;
        echo '<hr>';
        echo 'Rata-rata : ' . $total_nilai;
        echo '<hr>';
    }
     ?>
</body>
</html>