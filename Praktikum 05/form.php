<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            color: #343a40;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        select {
            border-radius: 5px;
        }

        button[type="submit"] {
            border-radius: 5px;
        }
    </style>

    <title>Form Nilai Ujian</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form Nilai Ujian</h1>
            </div>
        </div>
        <form method="POST" action="form.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="pilih" class="col-4 col-form-label">Pilih MK</label>
                <div class="col-8">
                    <select id="pilih" name="pilih" class="custom-select" required="required">
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Statistik & Probabilitas">Statistik & Probabilitas</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="User Interface & User Experience">User Interface & User Experience</option>
                        <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>



<?php
// Handling form submission and displaying result
if (isset($_POST["submit"])){
    require_once "class.php";

    $nim = $_POST["nim"];
    $pilih = $_POST["pilih"];
    $nilai = $_POST["nilai"];

    $nilaiUjian = new formnilai($nim, $pilih, $nilai);
    $result = $nilaiUjian->statusNilai();

    
    echo "<p>NIM: " . $nim . "</p>";
    echo "<p>Nama Mata Kuliah: " . $pilih . "</p>";
    echo "<p>Nilai: " . $nilai . "</p>";
    echo "<p>Hasil Ujian: " . $result['grade'] . "</p>";
    echo "<p>Grade: " . $result['keterangan'] . "</p>";
}
?>
