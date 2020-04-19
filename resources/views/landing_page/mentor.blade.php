<section id="speakers" class="wow fadeInUp">
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
                            <!-- <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex">
        <a href="{{ route('LandingPageListMentor') }}" class="text-white btn text-capitalize m-auto btn-lg rounded-pill px-5" style="background-color: #f82249">tampilkan lebih banyak</a>
    </div>

</section>

<script>
    !(function($) {

    })(jQuery)
</script>