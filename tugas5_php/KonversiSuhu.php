<?php
class KonversiSuhu {
    public $satuanSuhuAwal;
    public $besaranSuhu;
    public $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            return ($this->besaranSuhu * 9/5) + 32;
        } else {
            return null;
        }
    }

    public function FahrenheitToCelcius() {
        if ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            return ($this->besaranSuhu - 32) * 5/9;
        } else {
            return null;
        }
    }

    public function CelciusToRheamur() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            return $this->besaranSuhu * 4/5;
        } else {
            return null;
        }
    }

    public function RheamurToCelcius() {
        if ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            return $this->besaranSuhu * 5/4;
        } else {
            return null;
        }
    }

    public function cetak() {
        $hasil_konversi = null;
        if ($this->satuanSuhuAwal == "Celcius") {
            if ($this->satuanSuhuTujuan == "Fahrenheit") {
                $hasil_konversi = $this->CelciusToFahrenheit();
            } elseif ($this->satuanSuhuTujuan == "Rheamur") {
                $hasil_konversi = $this->CelciusToRheamur();
            }
        } elseif ($this->satuanSuhuAwal == "Fahrenheit") {
            if ($this->satuanSuhuTujuan == "Celcius") {
                $hasil_konversi = $this->FahrenheitToCelcius();
            }
        } elseif ($this->satuanSuhuAwal == "Rheamur") {
            if ($this->satuanSuhuTujuan == "Celcius") {
                $hasil_konversi = $this->RheamurToCelcius();
            }
        }

        if ($hasil_konversi !== null) {

            echo "<table border=1 align=center >";
            echo "<tr><td>Satuan Suhu Awal</td><td>Besaran Suhu</td><td>Satuan Suhu Tujuan</td><td>Hasil Konversi Suhu</td></tr>";
            echo "<tr><td>{$this->satuanSuhuAwal}</td><td>{$this->besaranSuhu}</td><td>{$this->satuanSuhuTujuan}</td><td>{$hasil_konversi}</td></tr>";
            echo "</table>";
        }
    }
}


?>