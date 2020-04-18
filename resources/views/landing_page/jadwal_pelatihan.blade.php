<section id="schedule" class="section-with-bg">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h2>Jadwal Pelatihan</h2>
            <p>Tandai kalendermu agar tidak ketinggalan jadwal pelatihan</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
            @foreach($jadwal_pelatihan_tgl as $key => $t)
            @php
            setlocale(LC_ALL, 'id_ID');
            $tmp = strtotime($t->waktu_pelatihan);
            $tgl = date("j F", $tmp);
            @endphp
            <li class="nav-item">
                <a class="nav-link {{ $key === 0 ? 'active' : '' }}" href="#day-{{ $key }}" role="tab" data-toggle="tab">{{ $tgl }}</a>
            </li>
            @endforeach
            <!-- <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">26 April</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">27 April</a>
            </li> -->
        </ul>

        <div class="tab-content row justify-content-center">
            <!-- Schdule Day 1 -->
            @php ($day_key = 0) @endphp
            @foreach($jadwal_pelatihan as $key => $jadwal)
            <div role="tabpanel" class="col-lg-9 tab-pane fade {{ $day_key === 0 ? 'show active' : '' }}" id="day-{{ $day_key }}">
                
                @foreach($jadwal as $val)
                @php
                $tmp_date = date_create($val['waktu_pelatihan']);
                $time = date_format($tmp_date, 'h:i A')
                @endphp
                <div class="row schedule-item">
                    <div class="col-md-2"><time>{{ $time }}</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="{{ asset($val['foto']) }}" alt="{{ $val['nama'] }}" style="width: 100%; object-fit: cover">
                        </div>
                        <h4>Mentor <span>{{ $val['nama'] }}</span></h4>
                        <p>{{ $val['judul'] }} <br>{{ $val['deskripsi'] }}</p>
                    </div>
                </div>
                @endforeach

                @php ($day_key += 1) @endphp

            </div>
            @endforeach
            <!-- End Schdule Day 1 -->

            <!-- Schdule Day 2 -->
            <!-- <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

                <div class="row schedule-item">
                    <div class="col-md-2"><time>10:00 AM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="{{ asset('img/speakers/1.jpg') }}" alt="Brenden Legros">
                        </div>
                        <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                        <p>Facere provident incidunt quos voluptas.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>11:00 AM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="{{ asset('img/speakers/2.jpg') }}" alt="Hubert Hirthe">
                        </div>
                        <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                        <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>12:00 AM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/3.jpg" alt="Cole Emmerich">
                        </div>
                        <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                        <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>02:00 PM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/4.jpg" alt="Jack Christiansen">
                        </div>
                        <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                        <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>03:00 PM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/5.jpg" alt="Alejandrin Littel">
                        </div>
                        <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                        <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>04:00 PM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/6.jpg" alt="Willow Trantow">
                        </div>
                        <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                        <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                    </div>
                </div>

            </div> -->
            <!-- End Schdule Day 2 -->

            <!-- Schdule Day 3 -->
            <!-- <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                <div class="row schedule-item">
                    <div class="col-md-2"><time>10:00 AM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/2.jpg" alt="Hubert Hirthe">
                        </div>
                        <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                        <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>11:00 AM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/3.jpg" alt="Cole Emmerich">
                        </div>
                        <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                        <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                    </div>
                </div>

                <div class="row schedule-item">
                    <div class="col-md-2"><time>12:00 AM</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="assets/img/speakers/1.jpg" alt="Brenden Legros">
                        </div>
                        <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                        <p>Facere provident incidunt quos voluptas.</p>
                    </div>
                </div>
            </div> -->
            <!-- End Schdule Day 2 -->

        </div>

    </div>

</section>