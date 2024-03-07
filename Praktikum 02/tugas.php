<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    


    <style>
        body {
            background-color:#00FFFF;
            margin-top: 50px;
        }
        .container {
            background-color: #DC143C;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1E90FF;
            margin-bottom: 30px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .harga-list {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
        margin-top: 20px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hasil-input h3 {
        color: #007bff;
        margin-bottom: 20px;
        text-align: center;
    }
    .hasil-input p {
        font-size: 18px;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan Makan & Minum</h2>
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
</body>
</html>