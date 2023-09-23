<?php
	$nama = "Nurlaela";
	$alamat = "<br> Kp sinang palai<br> rt 04 rw 01, Pagedangan, Kabupaten Tangerang<br>";
	$aboutMe = "Saya merupakan Mahasiswa yang berasal dari Tangerang dan sedang menjalani masa studi di jurusan teknik informatika pada univesitas pamulang,
	saya memiliki minat dibidang Web Depeloper, saya sangat menyukai membaca dan belajar hal-hal baru, memiliki kemampuan memahami alur pemprograman
	meskipun masih berada ditahap beginer. Saya mampu mengoding, design, bekerja secara induvidu maupun tim, menjalin komunikasi dengan baik,
	mampu mengatur waktu dan memiliki jiwa kepemimpinan. Memiliki rencana lulus tepat waktu pada tahun 2024.";
	$pengalaman = "Pada bulan maret-juni 2023 saya mengerjakan project merancang aplikasi sistem inventory bersama Tim untuk kafe berbasis web, 
	aktifitas yang dilakukan pada saat mengerjakan project yaitu sebagai berikut : membuat rancangan database, merancang tampilan awal sistem bersama tim, menganalisa kebutuhan sistem,
	project ini dilakukan dibawah bimbingan dosen pengampu mata kuliah kerja praktek. kemudian masih di satu semester yang sama saya bersama dengan tim mengerjakan project
	tugas matkul Rekayasa Perakat Lunak berupa membuat aplikasi sistem absensi kunjungan laboratorium sekolah project ini dikerjakan dibawah bimbingan dosen pengampu matkul RPL dan project ini berfokus dengan metode pengembangan sistem. ";
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index2.php">Portofolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index3.php">Contact</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider">
						</div> <a class="dropdown-item" href="#">Separated link</a>
					</div>
				</li>
			</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
			<div class="carousel">
			<img class="d-block w-100" alt="Carousel Bootstrap Third" src="IT.png">
				<div class="carousel-caption">
					<h4>
						Prodi Teknik Informatika
					</h4>
					<p>
						Saya merupakan mahasiswa prodi teknik informatika asal universitas pamulang, dan saya diberi kesempatan untuk mengikuti program MSIB batch 5 Kampus merdeka pada pt Hendevane indonesia.  
					</p>
				</div>
			</div>
				<h2>
					Hello, Saya <?= $nama ?> 
				</h2>
				<p>
					<?= $aboutMe ?>
				</p>
				<address>
					<strong>Alamat : </strong> <?= $alamat ?> <abbr title="Phone">Code:</abbr> 61228
			   </address>
			</div>
		</div>

	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>