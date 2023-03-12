<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lancar Mengemudi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet" />

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body id="body">
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i>
                <a href="#">info@lancarmengemudi.com</a>
                <i class="fa fa-phone"></i> +62 823 0144 2113
            </div>
            <div class="social-links float-right">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </section>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1>
                    <a href="#body" class="scrollto">Lancar<span> Mengemudi</span></a>
                </h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#about">Tentang Kami</a></li>
                    <li><a href="#services">Paket</a></li>
                    <li><a href="#services">Jadwal</a></li>
                    <li><a href="#portfolio">Mobil</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#team">Trainer</a></li>
                    <li><a href="#contact">Hubungi Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- page content -->
    @yield('content')
    <!-- /page content -->

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Lancar Mengemudi</strong>. All Rights
                Reserved
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/magnific-popup/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/sticky/sticky.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>