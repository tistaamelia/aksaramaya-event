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
                                {{ $pertanyaan->jawaban }}
                            </p>
                        </div>
                    </li>
                    @endforeach

                    <!-- <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Siapa saja yang bisa belajar di MOCO Academy? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah pelatihan bebas biaya? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Bagaimana cara mendaftar pelatihan di MOCO Academy? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Bisakah saya mengikuti lebih dari satu pelatihan? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Bagaimana pelatihan dimulai? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Seperti apa format pelatihan yang disediaka <i class="fa fa-minus-circle"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Bisakah saya mengunduh video pelatihan? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li> -->

                </ul>
            </div>
        </div>

    </div>

</section>