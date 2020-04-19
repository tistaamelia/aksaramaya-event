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
                <li><a href="{{ route('LandingPageIndex') }}#speakers">Mentor</a></li>
                <li><a href="{{ route('LandingPageIndex') }}#schedule">Pelatihan</a></li>
                <li><a href="{{ route('LandingPageIndex') }}#gallery">Pengumuman</a></li>
                <li><a href="{{ route('LandingPageIndex') }}#contact">Hubungi kami</a></li>
                <li class="buy-tickets d-none"><a href="#buy-tickets">Masuk</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>
<main id="main" style="margin-top: 40px">
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
                            <h3><a href="{{ route('LandingPageDetailMentor', ['user' => $m->nama]) }}">{{ $m->nama }}</a></h3>
                            <p>{{ $m->keahlian }}</p>
                            <div class="social">
                                @foreach($social_media as $sm)
                                @php
                                $url = $m->{$sm};
                                @endphp
                                <a href="{{$url}}" target="_blank"><i class="fa fa-{{$sm}}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main><!-- End #main -->

<script>
    !(function($) {

    })(jQuery)
</script>
@endsection