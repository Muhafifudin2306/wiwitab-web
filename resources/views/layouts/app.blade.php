<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wiwit AB | Risk Management Coach</title>
    <meta
        content="Wiwit AB | Professional Risk Management Coach yang terbiasa menangani permasalahan perusahaan di bidang manajemen dan kuangan"
        name="description">
    <meta content="Risk Management Coach" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/user/img/homepage.png') }}" rel="icon">
    <link href="{{ asset('assets/user/img/homepage.png') }}" rel="apple-touch-icon">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/user/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/section_one.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/section_two.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Damion&family=Rubik&display=swap');

        .ft-shadow {
            text-shadow: 2px 7px 17px rgba(30, 30, 30, 0.55);
        }

        .ft-shadow-sm {
            text-shadow: 2px 7px 17px rgba(70, 70, 70, 0.55);
        }

        .logo-font {
            font-family: 'Damion', cursive;
            font-size: 30px;
            color: #ffff;
            letter-spacing: 2px;
        }

        .arrow {
            height: 6px !important;
            opacity: 1;
            border-radius: 5px;
            color: #329D9C;
            width: 50%;
        }
    </style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top"
        style="background-image: url('https://wiwitab.nazmaoffice.com/public/assets/user/img/landing-page-02.png');background-size: cover;">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="d-none d-md-inline">
                <div class="logo-font ft-shadow-sm">Wiwit AB</div>
            </a>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="ft-shadow" href="{{ route('index') }}">HOME</a></li>
                    <li><a class="ft-shadow" href="{{ route('about') }}">PROFILE</a></li>
                    <li><a class="ft-shadow" href="{{ route('portofolio') }}">PORTOFOLIO</a></li>
                    <li><a class="ft-shadow" href="{{ route('event') }}">EVENTS</a></li>
                    <li><a class="ft-shadow" href="{{ route('materi') }}">MATERIAL</a></li>
                    <li><a class="ft-shadow" href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links">
                <a class="ft-shadow" href="https://www.youtube.com/c/WiwitABChannel" class="youtube"><i
                        class="bi bi-youtube"></i></a>
                <a class="ft-shadow" href="https://web.facebook.com/wiwitab007?_rdc=1&_rdr" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a class="ft-shadow" href="https://www.instagram.com/wiwit_ab/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a class="ft-shadow" href="https://id.linkedin.com/in/wiwit-ab-413324175" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>

        </div>

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <main>
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="pt-5 pb-2">
            <div class="text-center mb-5 pb-1">
                <h1 style="color:white" class="text-uppercase text-2 fs-2">Contact</h1>
            </div>
            <!-- Grid container -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-6 mb-6 mb-md-0">
                        <h2 class="py-2 text-2 fs-3" style="color:white">Wiwit AB</h2>

                        <div class="header-social-links">
                            <a href="https://www.youtube.com/c/WiwitABChannel" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
                            <a href="https://web.facebook.com/wiwitab007?_rdc=1&_rdr" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/wiwit_ab/" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://id.linkedin.com/in/wiwit-ab-413324175" class="linkedin"><i
                                    class="bi bi-linkedin"></i></i></a>
                        </div> <br>

                        <p style="color:white"><i class="bi bi-geo-alt"></i> JJl. Selokan Mataram Jl. Pogung Dalangan No.16, RT.11/RW.50, Pogung Dalangan, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
                        <p style="color:white"><i class="bi bi-envelope"></i> wiwtpruamazing@gmail.com</p>
                        <p style="color:white"><i class="bi bi-whatsapp"></i> 081392113276</p>

                    </div>
                </div>
                <hr>
            </div>
            <!-- Grid container -->
            <!-- Copyright -->
            <div class="text-center p-3">
                <a style="color:white">Wiwit AB | Copyright <?php echo '@ ' . date('Y'); ?></a>
            </div>
        </div>
        <!-- Copyright -->
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/user/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

</body>

</html>
