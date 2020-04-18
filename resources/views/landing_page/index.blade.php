@extends('layouts.landing_page')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="header-landing-page">
    <div class="container">

        <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="#intro">The<span>Event</span></a></h1>-->
            <a href="{{ url('/') }}" class="scrollto"><img src="{{ asset('img/logo.png') }}" alt="" title=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Beranda</a></li>
                <li><a href="#speakers">Mentor</a></li>
                <li><a href="#schedule">Pelatihan</a></li>
                <li><a href="#gallery">Pengumuman</a></li>
                <li><a href="#contact">Hubungi kami</a></li>
                <li class="buy-tickets d-none"><a href="#buy-tickets">Masuk</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- End Header -->
<!-- ======= Intro Section ======= -->
<section id="intro">
    <div class="wow fadeIn">
        <div class="intro-container">
            <div class="owl-carousel intro-carousel owl-theme">
                <div class="item">
                    <div class="d-flex flex-column align-items-center justify-content-center p-5">
                        <h1 class="mb-4 pb-0">MOCO ACADEMY<br></h1>
                        <p class="mb-4 pb-0">Manfaatkan waktu luang selama Work From Home atau Study From Home. <br>Ayo ikuti berbagai pelatihan online menarik!</p>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                        <a href="#about" class="about-btn scrollto d-none">Daftar</a>
                    </div>
                </div>
                <!-- <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div> -->
            </div>
        </div>
    </div>
</section><!-- End Intro Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3>Gratis</h3>
                    <p>Beberapa pelatihan bisa diikuti tanpa pungutan biaya.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Diskusi</h3>
                    <p>Tanya jawab dengan mentor di ruang kelas online.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Praktik</h3>
                    <p>Peserta bisa mengaplikasikan materi yang didapat lewat kompetisi seru.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Sertifikat</h3>
                    <p>Dapatkan sertifikat eksklusif ketika nilai ujian melewati standar kelulusan.</p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    @include('landing_page.mentor', $mentor)
    <!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    @include('landing_page.jadwal_pelatihan', [$jadwal_pelatihan, $jadwal_pelatihan_tgl])
    <!-- End Schedule Section -->

    <!-- ======= Gallery Section ======= -->
    @include('landing_page.pengumuman', $pengumuman)
    <!-- End Gallery Section -->


    <!-- =======  F.A.Q Section ======= -->
    @include('landing_page.pertanyaan_umum', $pertanyaan_umum)
    <!-- End  F.A.Q Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="wow fadeInUp">

        <div class="container">

            <div class="section-header">
                <h2>Hubungi Kami</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Alamat</h3>
                        <address>Perumahan Taman Gandaria Blok D No.7-8, Kebayoran
                            Lama, Jakarta Selatan 12240</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Nomor Telepon</h3>
                        <p><a href="tel:+6221 5020 5188">+6221 5020 5188
                            </a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:hello@mocoacademy.id">hello@mocoacademy.id</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul Pesan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="social-links">
                <a href="https://twitter.com/AcademyMoco" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/Moco-Academy-112271677113715/" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/mocoacademy/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Powered by <strong>Aksaramaya</strong>.
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection