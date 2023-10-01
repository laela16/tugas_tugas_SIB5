<?php
require "KonversiSuhu.php";
// Membuat objek-objek KonversiSuhu
$dataKonversiSuhu = [
    new KonversiSuhu("Celcius", 25, "Fahrenheit"),
    new KonversiSuhu("Fahrenheit", 77, "Celcius"),
    new KonversiSuhu("Celcius", 30, "Rheamur"),
    new KonversiSuhu("Rheamur", 24, "Celcius")
];

// Memanggil fungsi cetak untuk seluruh objek
foreach ($dataKonversiSuhu as $konversi) {
    $konversi->cetak();
}
?>