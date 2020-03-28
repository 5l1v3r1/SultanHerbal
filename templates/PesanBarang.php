<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pesan Barang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand">Sultan Herbal Store</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/#">Halaman Utama</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="<?=$pesanBarang?>">Pesan Barang <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/profil.jpeg" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST">
				<span class="contact1-form-title">
					Silahkan isi folmulir untuk pemesanan via pembayaran COD
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="nama_lengkap" placeholder="Nama lengkap" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Bisa whatsapp, Telegram, Line, dan lain lain">
					<input class="input1" type="text" name="nomor_wa" placeholder="Nomor Whatsapp" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Silahkan isi alamat pemesan">
					<input class="input1" type="text" name="alamat_pemesan" placeholder="Alamat lengkap pemesan" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Silahkan isi jumlah barang">
					<input class="input1" type="text" name="jumlah_barang" placeholder="Jumlah barang" required>
					<span class="shadow-input1"></span>
				</div>
				<div class="form-group">
					<select class="wrap-input1 custom-select my-1 mr-sm-2" title="Pilih nama barang" name="nama_barang"required>
						<?php
						foreach($namaBarang as $namaBarang) {
						?>
						<option><?=$namaBarang?></option>
						<? }?>
					</select>
					<span class="shadow-input1"></span>
				</div>

              <!--  <div class="wrap-input1 validate-input" data-validate = "Silahkan isi nama barang">
                    <input class="input1" type="text" name="nama_barang" placeholder="Nama barang" required>
                    <span class="shadow-input1"></span>
                </div>-->


                <div class="container-contact1-form-btn">
                	<button class="contact1-form-btn">
                		<span>
                			Order barang
                			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                		</span>
                	</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
    	<div class="container">
    		<p class="m-0 text-center text-white">Copyright &copy; <?=$copyRight?>, 2020</p>
    	</div>
    </footer>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
    	$('.js-tilt').tilt({
    		scale: 1.1
    	})
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    	window.dataLayer = window.dataLayer || [];
    	function gtag(){dataLayer.push(arguments);}
    	gtag('js', new Date());

    	gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>