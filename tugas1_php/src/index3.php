<?php
	$email = "nurlaela.nl1616@gmail.com";
    $no_tlp = "085779284161";
    $telegram = "0831667281";
    $github = "laela16";
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

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
            <dl text-align="center">
                    <dt>
                        Contact <br><br>
                    </dt>
                    <dt>
                        Whatsapp
                    </dt>
                    <dd>
                       <?= $no_tlp ?> <br><br>
                    </dd>
                    <dt>
                        Email
                    </dt>
                    <dd>
                        <?= $email ?><br><br>
                    </dd>
                    <dt>
                        Telegram
                    </dt>
                    <dd>
                        <?= $telegram ?><br><br>
                    </dd>
                    <dt>
                        Github
                    </dt>
                    <dd>
                        <?= $github ?><br><br>
                    </dd>
                </dl>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>