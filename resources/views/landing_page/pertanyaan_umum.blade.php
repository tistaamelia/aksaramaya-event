<section id="faq" class="section-with-bg  fadeInUp">

    <div class="container">

        <div class="section-header">
            <h2>P.S.D </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <ul id="faq-list">
                    @foreach($pertanyaan_umum as $key => $pertanyaan)
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq{{$key+1}}">{{ $pertanyaan->pertanyaan }} <i class="fa fa-minus-circle"></i></a>
                        <div id="faq{{$key+1}}" class="collapse" data-parent="#faq-list">
                            <p>
                                {!! $pertanyaan->jawaban !!}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

</section>