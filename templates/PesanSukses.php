<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pesan Sukses</title>
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
        <a class="navbar-brand"><?=$vendorName?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Halaman Utama</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?=$kontak?>">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$pesanBarang?>">Pesan Barang</a> 
                </li>
            </ul>
        </div>
    </nav>
    <div class="contact1 d-flex h-100">
        <div class="container-contact1">
            <div class="row justify-content-center align-self-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <img src="images/sukses.png" class="h-40 w-25">
                    <h3>Pesanan Sedang Di Proses</h3>
                    <br/>
                    <p style="font-size:20px;color:#5C5C5C;">Kami telah menerima <?=htmlspecialchars($jumlahBarang);?> unit <?=htmlspecialchars($namaBarang);?> pesanan anda, silahkan tunggu untuk respon pengirimanya, Kembali ke menu?</p>
                    <a href="/#" class="btn btn-success">Kembali</a><br><br>
                </div>   
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; <?=$copyRight?>, 2020</p>
      </div>
      <!-- /.container -->
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