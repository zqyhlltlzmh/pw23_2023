<?php
    include_once 'header.php'
?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table text-uppercase table-bordered">
      <thead>
          <tr class="table-primary">
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Haekal</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Jendral</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

        <?php
        require_once 'libfungsi.php';
        if(isset($_POST['submit'])){
            $no = $_POST['no'];
            $nama_lengkap = $_POST['nama_lengkap'];
            $matkul = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];
            $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

            echo "<tr>";
            echo "<td>3</td>";
            echo "<td>$nama_lengkap</td>";
            echo "<td>$matkul</td>";
            echo "<td>$nilai_uts</td>";
            echo "<td>$nilai_uas</td>";
            echo "<td>$nilai_tugas</td>";
            echo '<td>'. number_format($total_nilai, 2 ). '</td>';
            echo grade($total_nilai);
            echo predikat($total_nilai);
            echo kelulusan($total_nilai);
            echo "</tr>";
        
        }
            
        ?>
        
      </tbody>
  </table>
</div>