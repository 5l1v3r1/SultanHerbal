<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Utama</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Halaman Utama</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?=$pesanBarang?>">Pesan Barang</a> 
                </li>
            </ul>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="contact1">
        <div class="container-contact1">
            <!-- Jumbotron Header -->
            <header class="jumbotron my-4">
              <h2 class="display-5">Bukan yg terbesar, tapi yg terpercaya</h2>
              <br/>
              <p class="lead">Hajar Jahanam adalah getah mengeras dari tumbuhan tertentu yang hanya ada di negara Mesir dan India. Getah tumbuhan yang mengeras ini akan berbentuk menyerupai batu berwarna hitam sehingga ada pula yang menyebutnya dengan nama 'Black Stone'. Kemudian, getah itu diramu sedemikian rupa menjadi sebuah obat tradisional yang dikhususkan untuk laki-laki.</p>
              <a href="<?=$pesanBarang?>" class="btn btn-primary btn-lg">Pesan sekarang!</a>
          </header>

          <!-- Page Features -->
          <div class="row text-center">

              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="images/testi1.jpeg" alt="">
              </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="images/testi2.jpeg" alt="">
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/testi3.jpeg" alt="">
      </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="images/testi4.jpeg" alt="">
  </div>
</div>

</div>
<!-- /.row -->

</div>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Sultan Herbal Store, 2020</p>
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