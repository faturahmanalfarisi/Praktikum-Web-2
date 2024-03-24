<?php

class Mahasiswa{
    public $namaMahasiswa,$nim,$domisili,$prodi,$ipk;

    function __construct($namaMahasiswa,$nim,$domisili,$prodi,$ipk)
    {
        $this -> namaMahasiswa = $namaMahasiswa;
        $this -> nim = $nim;
        $this -> domisili = $domisili;
        $this -> prodi = $prodi;
        $this -> ipk = $ipk;
    }

    function setPredikatIPK($ipk){
        if ($ipk > 3.5){
            echo "Cumlaude";
        } else {
            echo "you did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("Faturahman Alfarisi", "0110223065", "Bogor", " Teknik Informatika", 4.0);

echo "Nama: " . $mahasiswa->namaMahasiswa . "<br>"; 
echo "NIM: " . $mahasiswa->nim . "<br>"; 
echo "Domisili: " . $mahasiswa->domisili . "<br>"; 
echo "Program Studi: " . $mahasiswa->prodi . "<br>"; 
echo "IPK: " . $mahasiswa->ipk . "<br>"; 
echo $mahasiswa->setPredikatIPK($mahasiswa -> ipk);