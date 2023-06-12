@extends('layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <div>
                        <h1>Basic Laravel by me</h1>
                        <h2>Learning from Laravel documentation by myself</h2>
                        <a href="{{ $link }}" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="{{ $image_hero }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in">
                    <img src="https://www.portal7.co.id/uploads/images/202304/image_750x_642c37c886265.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0">
                        <h3>Laravel 8</h3>
                        <p class="fst-italic">
                            Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller. Laravel
                            berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                Laravel adalah satu-satunya framework yang membantu untuk memaksimalkan penggunaan PHP
                                di dalam proses pengembangan website. Dengan adanya laravel menjadikan bahasa pemrograman PHP lebih powerful, cepat, aman,
                                dan simpel. Laravel populer berkat fitur dan tools mumpuni yang dimiliki.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container mt-5">
            <div class="copyright">
                &copy; Copyright <strong><span>Mekwaw👑</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
@endsection
