<?php

class formnilai {
    public $nim, $pilih, $nilai;

    function __construct($nim, $pilih, $nilai) {
        $this->nim = $nim;
        $this->pilih = $pilih;
        $this->nilai = $nilai;
    }

    public function statusNilai() {
        $grade = '';
        $keterangan = '';

        if ($this->nilai >= 86) {
            $grade = "A";
        } elseif ($this->nilai >= 75) {
            $grade = "B";
        } elseif ($this->nilai >= 60) {
            $grade = "C";
        } else {
            $grade = "D";
        }

        // Penentuan apakah lulus, remedial, atau tidak lulus
        if ($this->nilai >= 80) {
            $keterangan = "Lulus";
        } elseif ($this->nilai >= 60) {
            $keterangan = "Remedial";
        } else {
            $keterangan = "Tidak Lulus";
        }

        return ['grade' => $grade, 'keterangan' => $keterangan];
    }
}

?>