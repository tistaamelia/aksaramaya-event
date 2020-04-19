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
                <div class="row schedule-item jadwal-pelatihan-item" style="cursor: pointer">
                    <div class="col-md-2"><time>{{ $time }}</time></div>
                    <div class="col-md-10">
                        <div class="speaker">
                            <img src="{{ asset($val['foto']) }}" alt="{{ $val['nama'] }}" style="width: 100%; object-fit: cover">
                        </div>
                        <h4>Mentor <span id="mentor-name">{{ $val['nama'] }}</span></h4>
                        <p>{{ $val['judul'] }} <br>{{ $val['deskripsi'] }}</p>
                    </div>
                </div>
                @endforeach

                @php ($day_key += 1) @endphp

            </div>
            @endforeach
        </div>

    </div>

</section>

<script>
    $('.jadwal-pelatihan-item').on('click', function() {
        const mentor_name = $(this).find('#mentor-name').text()
        if (mentor_name) {
            window.open(`{{ url('/mentor-detail') }}/${mentor_name}`, '_self')
        }
    })
</script>