<?php
require_once 'header.php';
require_once 'sidebar.php';


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
              <h3 class="card-title">Praktikum 02</h3>

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
              <div class="container">
                <h1>Form Pemesanan Makan & Minum</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nama :</label> 
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Pemesan" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Menu</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="NASI" required="required"> 
                                <label for="produk_0" class="custom-control-label">Nasi</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="AYAM" required="required"> 
                                <label for="produk_1" class="custom-control-label">Ayam</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="SODA" required="required"> 
                                <label for="produk_2" class="custom-control-label">Soda</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Menu</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Pesanan" type="number" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="pesan" class="btn btn-primary">Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga</h4>
                    <ul>
                        <li>Nasi - Rp. 10.000</li>
                        <li>Ayam - Rp. 20.000</li>
                        <li>Soda - Rp. 15.000  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $NASI = 10000 * $jumlah;
        $AYAM = 20000 * $jumlah;
        $SODA = 15000 * $jumlah;

        echo "<br>Nama Pemesan : " . $name;
        echo "<br>Produk Pilihan : " . $produk;
        echo "<br>Jumlah Pesanan : " . $jumlah;

        switch ($produk) {
            case "NASI" : 
                echo "<br>Total Belanja : " . $NASI;
                break;
            case "AYAM" : 
                echo "<br>Total Belanja : " . $AYAM;
                break;
            case "SODA" : 
                echo "<br>Total Belanja : " . $SODA;
                break;
        }
    }
    ?>
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