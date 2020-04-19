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
    <section id="speakers-details" class="wow fadeIn">
        <div class="container">
            <div class="section-header">
                <h2 class="text-uppercase">detail mentor</h2>
                <p>Belajar langsung dari para mentor ahli di bidangnya.</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($detail_mentor->foto) }}" alt="{{ $detail_mentor->nama }}" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <div class="details">
                        <h2>{{ $detail_mentor->nama }}</h2>
                        <div class="social">
                            @foreach($social_media as $sm)
                            @php
                            $url = $detail_mentor->{$sm};
                            @endphp
                            <a href="{{$url}}" target="_blank"><i class="fa fa-{{$sm}}"></i></a>
                            @endforeach
                        </div>
                        <p>{{ $detail_mentor->detail_profil }}</p>
                        <div class="list-pelatihan py-2 mt-3">
                            <h4 class="text-capitalize font-weight-bold">pelatihan</h4>
                            <div class="schedule">
                                @foreach($jadwal_pelatihan as $jp)
                                <div class="schedule-item">
                                    @php
                                    $tmp = date_create($jp->waktu_pelatihan);
                                    $waktu = date_format($tmp, 'd F Y H:i');
                                    @endphp
                                    <p>{{ $waktu }}</p>
                                    <p class="font-weight-bold mb-0">{{ $jp->judul }}</p>
                                    <p>{{ $jp->deskripsi }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="google-form mt-2">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeCDE-wDTAyvlkd0xJSfioW7QHdjb5z46EQFLiNCs3DO_jdPw/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
</main>
@endsection