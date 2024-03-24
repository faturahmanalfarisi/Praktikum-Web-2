<?php
require_once 'header.php';
require_once 'sidebar.php';

$nilai1 = ["id" => 1, "nama" => "Faturahman Alfarisi", "nim" => "0110223065", "rombel" => "TI02-2023", "uts" => 90, "uas" => 90, "tugas" => 90];
$nilai2 = ["id" => 2, "nama" => "Aria Dillah", "nim" => "0110223076", "rombel" => "TI02-2023", "uts" => 85, "uas" => 85, "tugas" => 85];
$nilai3 = ["id" => 3, "nama" => "Muhammad Zen Alby", "nim" => "0110223077", "rombel" => "TI02-2023", "uts" => 95, "uas" => 94, "tugas" => 90];
$nilai4 = ["id" => 4, "nama" => "Mahdi Saputra", "nim" => "0110223058", "rombel" => "TI02-2023", "uts" => 18, "uas" => 15, "tugas" => 10];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 01</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <h1>Tabel Nilai Mahasiswa</h1>
              <table class="table">
            <thead class="thead-" style="background-color: blue; color: white;">
                <tr>
                    <th scope="col" style="color: yellow;">No</th>
                    <th scope="col" style="color: yellow;">Nama</th>
                    <th scope="col" style="color: yellow;">NIM</th>
                    <th scope="col" style="color: yellow;">Rombel</th>
                    <th scope="col" style="color: yellow;">UTS</th>
                    <th scope="col" style="color: yellow;">UAS</th>
                    <th scope="col" style="color: yellow;">Tugas</th>
                    <th scope="col" style="color: yellow;">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["nim"]?></td>
                        <td><?= $nilai["rombel"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>