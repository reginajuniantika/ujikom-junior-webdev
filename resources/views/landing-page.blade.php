<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>UJIKOM WEB DEVELOP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">
        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <h1 class="sitename">E-Pegawai</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-start">
                    <div class="col-lg-8">
                        <h2>Welcome to E Pegawai</h2>
                        <h1 id="text1" class="fira-sans-bold txt-primary animated-text-2" style="margin-top: 24px;">
                        </h1>
                        <h1 id="text2" class="fira-sans-bold txt-primary animated-text-2" style="margin-top: 24px;">
                        </h1>
                        <h1 id="text3" class="fira-sans-bold txt-primary animated-text-2" style="margin-top: 24px;">
                        </h1>
                        <p>Web Management data Pegawai</p>
                        <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <section id="about" class="about section">

            <!-- Judul Bagian -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Manajemen Pegawai</h2>
            </div><!-- Akhir Judul Bagian -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="Manajemen Pegawai">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Pengelolaan Data Pegawai</h3>
                        <p class="fst-italic">
                            Smart, Inovatif, Professional
                        </p>
                        <p>Selamat Datang di Aplikasi Manajemen Pegawai. kami hadir untuk membantu pengelolaan pegawai di perusahaan Anda. Dengan web yang responsive dan fungsional, Anda dapat dengan mudah mengelola data pegawai.</p>
                        <a href="{{ route('login') }}" class="read-more"><span>Explore Fitur</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /Bagian Manajemen Pegawai -->

        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Services</span>
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
        
            <div class="container">
        
                <div class="row gy-4">
        
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Membuat, memperbarui, dan menghapus data pegawai dengan mudah.</h3>
                            </a>
                        </div>
                    </div><!-- End Service Item -->
        
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Mengakses detail pegawai.</h3>
                            </a>
                        </div>
                    </div><!-- End Service Item -->
        
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Melihat jumlah dan domisili pegawai.</h3>
                            </a>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- /Services Section -->
    </main>
    <footer id="footer" class="footer position-relative">
        <div class="container copyright text-center mt-4">
            <p>© <span>UJIKOM WEB DEVELOP</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
