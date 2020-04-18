@extends('layouts.landing_page')

@section('content')
<header id="header" class="header-scrolled">
    <div class="container">

        <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="#intro">The<span>Event</span></a></h1>-->
            <a href="{{ url('/') }}" class="scrollto"><img src="{{ asset('img/logo.png') }}" alt="" title=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{ route('LandingPageIndex') }}">Beranda</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>
<main id="main">
<section id="speakers" class="wow fadeInUp" style="margin-top: 70px">
    <div class="container">
        <div class="section-header">
            <h2>Mentor</h2>
            <p>Belajar dari mentor terbaik di bidangnya</p>
        </div>

        <div class="row">
            @foreach($mentor as $m)
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                    @if($m->foto)
                    <img src="{{ asset($m->foto) }}" alt="{{ $m->nama }}" style="width: 100%; height: 300px; object-fit: cover">
                    @endif
                    <div class="details">
                        <h3><a href="speaker-details.html">{{ $m->nama }}</a></h3>
                        <p>{{ $m->keahlian }}</p>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6">
                <div class="speaker">
                    <img src="{{ asset('img/speakers/2.png') }}" alt="Speaker 2" class="img-fluid">
                    <div class="details">
                        <h3><a href="speaker-details.html">Handreas Stefano</a></h3>
                        <p>Videographer</p>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                    <img src="{{ asset('img/speakers/3.png') }}" alt="Speaker 3" class="img-fluid">
                    <div class="details">
                        <h3><a href="speaker-details.html">Maman Suherman</a></h3>
                        <p>Content Creator</p>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
</main><!-- End #main -->

<script>
    !(function($) {

    })(jQuery)
</script>
@endsection