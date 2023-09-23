 <?php
// Inisialisasi variabel
$nama = "";
$pekerjaan = "";
$hobby = "";

// Cek apakah form sudah disubmit
if(isset($_POST['submit'])){
    error_reporting(0);
    // Ambil data dari form
  $nama = $_POST['nama'];
  $pekerjaan = $_POST['pekerjaan'];
  $hobby = $_POST['hobby'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Data Diri</title>
</head>
<body>
  <form method="post">
  <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" require>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                <select id="pekerjaan" name="pekerjaan">
                    <option value=""></option>
                    <option value="Data Analis">Data Analis</option>
                    <option value="Full stack Depeloper">Full stack Depeloper</option>
                    <option value="Fronted Depeloper">Fronted Depeloper</option>
                    <option value="Backend Depeloper">Backend Depeloper </option>
                    <option value="Software Engeenering">Software Engeenering</option>
                    <option value="UI / UX designer">UI / UX designer</option>
                    <option value="Manajer">Manajer</option>
                    <option value="IT Support">IT Support</option>
                    <option value="Game Depeloper">Game Depeloper</option>
                    <option value="Web Depeloper">Web Depeloper</option>
                </select><br>
                </td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>
                <?php
                     $hobbies = array("Membaca", "Menulis", "Menonton", "Bermain Bulu tangkis", "Fotografi", "Traveling", "Kulineran", "Koleksi Buku", "Mendengar Musik", "Menyanyi");
                     foreach ($hobbies as $h) {
                     echo '<input type="radio" id="' . $h . '" name="hobby" value="' . $h . '" ';
                     if ($hobby == $h) {
                             echo 'checked';
                             }
                         echo '>';
                         echo '<label for="' . $h . '">' . ucfirst($h) . '</label><br>';
                     }
                ?>
                </td>
            </tr>
            <td><input type="submit" name="submit" value="Simpan"></td>
        </table>
  </form>

  <!-- menampilkan data dalam bentuk tabel jika tombol "Simpan" sudah ditekan -->
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Pekerjaan</th>
        <th>Hobby</th>
    </tr>
    <tr>
        <td><?= $nama ?></td>
        <td><?= $pekerjaan ?></td>
        <td><?= $hobby ?></td>
    </tr>
</table>
</body>
</html>

 