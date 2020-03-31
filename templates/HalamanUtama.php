<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman Utama</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
                        <a class="nav-link" href="<?=$pesanBarang?>">Pesan Barang</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content -->
        <div class="contact1">
            <div class="container-contact1">
                <div class="js-tilt" data-tilt>
                    <img src="assets/images/profil.jpeg" class="mx-auto d-block h-50 w-50" alt="IMG">
                </div>
                <!-- Jumbotron Header -->
                <header>
                    <div class="jumbotron my-4">
                        <h2 class="display-5">Apa Itu Hajar Jahanam?</h2>
                        <div class="js-tilt" data-tilt>
                            <img src="assets/images/hajar-jahanam-super-premium1.png" class="h-50 w-50" alt="IMG">
                        </div>
                        <p class="lead">Hajar Jahanam adalah getah mengeras dari tumbuhan tertentu yang hanya ada di negara Mesir dan India. Getah tumbuhan yang mengeras ini akan berbentuk menyerupai batu berwarna hitam sehingga ada pula yang menyebutnya dengan nama 'Black Stone'. Kemudian, getah itu diramu sedemikian rupa menjadi sebuah obat tradisional yang dikhususkan untuk laki-laki.</p>
                    </div>
                    
                    <div class="jumbotron my-4">
                        <h2 class="display-5">Khasiat Hajar Jahanam</h2>
                        <div class="js-tilt" data-tilt>
                            <img src="assets/images/hajar-jahanam2.png" class="h-50 w-50" alt="IMG">
                        </div>
                        <p class="lead">Hajar Jahanam sejatinya telah ada dan dipakai sejak zaman dahulu kala, yaitu pada masa Mesir Kuno. Khasiat Hajar Jahanam yang terkenal adalah membantu menjaga stamina laki-laki dalam bercinta dengan mengurangi tingkat sensitivitas organ intim laki-laki. Dengan begitu, sesi bercinta bersama pasangan jadi lebih tahan lama dan membantu memuaskan pasangan.</p>
                    </div>
                    <div class="jumbotron my-4">
                        <h2 class="display-5">Cara Pemakaian</h2>
                        <br/>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <video controls>
                                <source src="assets/videos/hajar-jahanam.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
                            </video>
                        </div>
                        <br/>
                        <p class="lead">1.Oleskan Hajar Jahanam Super 2 jam sebelum melakukan hubungan pada daerah bawah kelamin anda. Oleskan Tipis sajan Jangan Terlalu Banyak<br/><br/>2.Biarkan 30-45 Menit sampai Herbal bereaksi dan terasa hangat. Kemudian Cuci dengan air dan sabun Sampai Bersih<br/><br/>3.Setelah di cuci bersih, siap untuk melakukan hubungan intim.</p>
                    </div>
                </header>
                
                <!-- Page Features -->
                <div class="jumbotron pricing py-5">
                    <!-- Super gold -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">promo hajar jahanam super gold</h5>
                                <h6 class="card-price text-center"><strike>110.000</strike><span class="period">/pcs</span></h6>
                                <h6 class="card-price text-center">80.000<span class="period">/pcs</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>10x lebih kuat khsiat nya daripada hajar jahanam biasa</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>1 Pcs cukup untuk 200x pakai</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Tanpa efek samping</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span><strike>Gratis ongkir</strike></li>
                                </ul>
                                <a href="<?=$pesanBarang?>?barang=hjgold" class="btn btn-block btn-primary text-uppercase">Pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jumbotron py5 pricing">
                    <h2 class="display-5">Testimoni</h2>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/images/testi1.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/images/testi2.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/images/testi3.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row text-bottom">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-80">
                            <img class="card-img-bottom" src="assets/images/bisacod.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-70">
                            <img class="card-img-bottom" src="assets/images/jte.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-60">
                            <img class="card-img-bottom" src="assets/images/bank.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="contact1">
                <a href="<?=$pesanBarang?>" class="btn btn-success btn-lg">
                    <span class="text-center text-white">
                        <span class="">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </span>
                        <span class="">BAYAR DITEMPAT KLIK DISINI</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; <?=$vendorName?>, 2020</p>
        </div>
        <!-- /.container -->
    </footer>
    <!--===============================================================================================-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
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
    <script src="assets/js/main.js"></script>
</body>
</html>