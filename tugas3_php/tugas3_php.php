<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3</title>
</head>
<body>
    <?php
    $m1 = ["nim" => "0111111", "nama" => "Nurlaela", "nilai" => 98];
    $m2 = ["nim" => "0111112", "nama" => "laela", "nilai" => 88];
    $m3 = ["nim" => "0111113", "nama" => "Haechan Lee", "nilai" => 77];
    $m4 = ["nim" => "0111114", "nama" => "Mark Lee", "nilai" => 60];
    $m5 = ["nim" => "0111115", "nama" => "Kim Seokjin", "nilai" => 93];
    $m6 = ["nim" => "0111116", "nama" => "Kim Doyoung", "nilai" => 78];
    $m7 = ["nim" => "0111117", "nama" => "Thingki wingki ", "nilai" => 76];
    $m8 = ["nim" => "0111118", "nama" => "La Echan", "nilai" => 86];
    $m9 = ["nim" => "0111119", "nama" => "Hyuck Lee", "nilai" => 85];
    $m10 = ["nim" => "01111110", "nama" => "Nay Nay", "nilai" => 61];

    $ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
    $jumlah_mhs = count($mahasiswa);
    $nilai = array_column($mahasiswa,'nilai');
    $total_nilai = array_sum($nilai);
    $nilai_tertinggi = max($nilai);
    $nilai_terendah = min($nilai);
    $nilai_rata_rata = $total_nilai / $jumlah_mhs;
    $keterangan = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata - Rata' => $nilai_rata_rata,
        'Jumlah Mahasiswa' => $jumlah_mhs,
        'Jumlah Keseluruhan Nilai' => $total_nilai
    ];

    
    ?>

    <h3 align = "center">Daftar Nilai Mahasiswa</h3>
    <table border = "1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php 
                foreach($ar_judul as $judul){ ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; 
            foreach($mahasiswa as $mhs){
                $ket = $nilai >= 60 ? "Lulus" : "Tidak Lulus";
                $nilai = $mhs['nilai'];
                if ($nilai >= 85 && $nilai <= 100) $grade = "A";
                else if($nilai >= 75 && $nilai <= 84 ) $grade = "B";
                else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
                else if ($nilai >= 30 && $nilai <= 59) $grade = "D";
                else if ($nilai >= 0 && $nilai <= 29) $grade = "E";
                else $grade = "";

                switch($grade){
                    case "A" : $predikat = "Memuaskan"; break;
                    case "B" : $predikat = "Bagus"; break;
                    case "C" : $predikat = "Cukup"; break;
                    case "D" : $predikat = "kurang"; break;
                    case "E" : $predikat = "Buruk"; break;
                    default: $predikat = '';
                }
            ?>
            <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs ['nim'] ?> </td>
                    <td><?= $mhs ['nama'] ?></td>
                    <td><?= $mhs ['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
               <?php } ?>
        </tbody>
        <tfoot>
        <?php
                foreach($keterangan as $kete => $hasil){
                    ?>
                    <tr>
                        <th colspan="3"><?= $kete ?></th>
                        <th colspan="5"><?= $hasil ?></th>
                    </tr>
                
               <?php  } ?>
        </tfoot>
    </table>
</body>
</html>