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
                        <a class="nav-link" href="<?=$hajarJahanamSuper?>">Hajar Jahanam Super</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$lintahPapua?>">Lintah Papua</a>
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
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="assets/images/profil.jpeg" alt="IMG">
                </div>
                <span class="contact1-form-title">Bukan yg terbesar, tetapi yg terpercaya<p class="lead">Menyediakan berbagai macam obat obatan herbal</p></span>

                <a class="btn btn-success mx-auto" href="pesan-barang">Belanja sekarang</a>
            </div>
        </div>
        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; <?=$vendorName?>, 2020</p>
            </div>
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