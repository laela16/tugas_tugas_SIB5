<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran(4);
$p1 = new PersegiPanjang(6, 7);
$s1 = new Segitiga(7, 9);

$data = [$l1, $p1, $s1];

$judul = ["No", "Nama Bidang", "Luas Bidang", "Keliling Bidang" ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 6</title>
</head>
<body>
<table border="1">
  <thead>
    <tr>
      <?php
      foreach ($judul as $kolom) {
        echo "<th>$kolom</th>";
      }
      ?>
    </tr>
  </thead>
   <tbody>
   <?php
    foreach ($data as $d => $objek) {
      echo "<tr>";
      echo "<td>" . ($d + 1) . "</td>";
      echo "<td>" . $objek->namaBidang() . "</td>";
      echo "<td>" . $objek->luasBidang() . "</td>";
      echo "<td>" . $objek->kelilingBidang() . "</td>";
      echo "</tr>";
    }
    ?>
   </tbody>
</body>
</html>