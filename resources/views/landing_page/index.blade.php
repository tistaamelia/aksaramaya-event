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
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4 d-none" data-vbtype="video" data-autoplay="true"></a>
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
    @include('landing_page.mentor', [$mentor, $social_media])
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
    @include('landing_page.kontak')
    <!-- End Contact Section -->

</main><!-- End #main -->
@endsection