<section id="gallery" class="wow fadeInUp">

    <div class="container">
        <div class="section-header">
            <h2>Pengumuman</h2>
        </div>
    </div>

    <div class="owl-carousel gallery-carousel">
        @foreach($pengumuman as $val)
        <div class="col-lg-12">
            <h3>{{ $val->nama }}</h3>
            <p>{{ $val->pengumuman }}</p>
        </div>
        @endforeach
    </div>

</section>