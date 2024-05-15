<?php
// Include your header and other common elements
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Tour UMPR - Daftar Gedung</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-FpNbPbMYz3sodDLi+xFrW5e3bC36RQ0p5YFYEbb72Yj6lk0/3Y+YAVci6XzXDfFJ" crossorigin="anonymous">


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
                            <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
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
    <!-- Main Content Start -->
    <main id="main">
        <!-- Gedung Tour Content -->
        <section id="gedung-tour" class="mt-5">
            <div class="container">
                <h2 class="h1-responsive font-weight-bold text-center my-2">DAFTAR GEDUNG UNIVERSITAS MUHAMMADIYAH
                    PALANGKA RAYA</h2><br><br>
                <!-- Daftar Gedung -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/gedungA.jpg" class="card-img-top img-fluid" alt="Gedung A">
                            <div class="card-body text-center">
                                <a href="gedungA/" target="_blank" class="btn btn-primary">Gedung A</a>
                                <!-- <a href=""></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/gdgb.jpg" class="card-img-top img-fluid" alt="Gedung B">
                            <div class="card-body text-center">
                                <a href="gedungB" target="_blank" class="btn btn-primary">Gedung B</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/gedungC.jpg" class="card-img-top img-fluid" alt="Gedung C">
                            <div class="card-body text-center">
                                <a href="gedungC" target="_blank" class="btn btn-primary">Gedung C</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/gedungD.jpg" class="card-img-top img-fluid" alt="Gedung D">
                            <div class="card-body text-center">
                                <a href="gedungD" target="_blank" class="btn btn-primary">Gedung D</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/gedungE.jpg" class="card-img-top img-fluid" alt="Gedung E">
                            <div class="card-body text-center">
                                <a href="gedungE" target="_blank" class="btn btn-primary">Gedung E</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/gedungE.jpg" class="card-img-top img-fluid" alt="Fasilitas Umum">
                            <div class="card-body text-center">
                                <a href="FasilitasUmum" target="_blank" class="btn btn-primary">Fasilitas Umum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Daftar Gedung -->
            </div>
        </section>
        <!-- End Gedung Tour Content -->
    </main>
    <!-- Main Content End -->

    <section>
        <div class="container mb-5">

        </div>
    </section>

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
                        <p><i class="bi bi-geo-alt me-3"></i> Jl. RTA. Milono KM 1.5 Palangka Raya Kode Pos 73111</p>
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

        <?php
        // Include your footer and other common elements
        ?>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

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