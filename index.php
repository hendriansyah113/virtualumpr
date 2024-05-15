<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Tour UMPR - Beranda</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>


    <!--Header Start-->
    <header>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="Logo" class="margin-right" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!--Navbar End-->

    </header>
    <!--Header End-->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.jpg" class="d-block w-100" alt="UMP Logo">

                <!-- Text -->
                <div class="text-container"
                    style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff;">
                    <h1>Selamat datang di Virtual Tour UM Palangka Raya !</h1>
                    <p>Silakan klik tombol 'Mulai' untuk memulai tur virtual.</p>
                </div>
                <!-- End Text -->

                <!-- Start Button Container -->
                <div class="start-button-container"
                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <a href="gedung_tour.php">
                        <button id="mulaiButton" class="btn btn-primary start-button"
                            style="font-size: 24px;">Mulai</button>
                    </a>
                </div>

                <!-- End Start Button Container -->
            </div>
        </div>
    </div>


    <main id="main">

        <!-- Kontak -->
        <footer class="text-center text-lg-start py-3 text-white" style="background-color: #24231F;">
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4 text-center">
                                Universitas Muhammadiyah Palangka Raya
                            </h6>
                            <div class="navbar">
                                <a class="navbar-brand mx-auto" href="#">
                                    <img src="img/logoump.png" alt="Logo" class="margin-right" width="100">
                                </a>
                            </div>
                            <p class="text-center"> Layanan Virtual Tour
                                Kampus Universitas Muhammadiyah
                                Palangka Raya
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4"
                                style="border-bottom: 2px solid green; padding-bottom: 5px;">
                                Social Media
                            </h6>
                            <!-- Social Media Icons -->
                            <p><a href="https://www.instagram.com/umpalangkaraya?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" style="color: white;"><i class="fab fa-instagram me-3"></i>
                                    Instagram</a></p>
                            <p><a href="https://www.facebook.com/umpr1987?mibextid=ZbWKwL" target="_blank"
                                    style="color: white;"><i class="fab fa-facebook me-3"></i> Facebook</a></p>
                            <p><a href="https://www.youtube.com/@umpr" target="_blank" style="color: white;"><i
                                        class="fab fa-youtube me-3"></i> YouTube</a></p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4"
                                style="border-bottom: 2px solid green; padding-bottom: 5px;">
                                Contact
                            </h6>
                            <p><i class="bi bi-geo-alt me-3"></i> Jl. RTA. Milono KM 1.5 Palangka Raya Kode Pos 73111
                            </p>
                            <p><i class="bi bi-envelope me-3"></i> umpr@umpr.ac.id</p>
                            <p><i class="bi bi-phone me-3"></i> (+62) 536-3222184</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <div class="text-center py-4" style="background-color: #000; color: #fff;">
                <span style="color: orange;">Copyright ©2024 Virtual Tour Universitas Muhammadiyah Palangka Raya </span>
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/"></a>
            </div>
            <!-- EndFooter -->




            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

            <script>
            document.getElementById('mulaiButton').addEventListener('click', function() {
                window.location.href = 'gedung_tour.php';
            });

            var navItems = document.querySelectorAll('.navbar-nav .nav-link');

            // Tambahkan event listener untuk setiap item menu
            navItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    // Tutup menu ketika item dipilih
                    var navbarCollapse = document.getElementById('navbarSupportedContent');
                    if (navbarCollapse.classList.contains('show')) {
                        navbarCollapse.classList.remove('show');
                    }
                });
            });
            </script>
</body>

</html>