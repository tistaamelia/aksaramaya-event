<div class="form">
    <form action="{{ route('LandingPageFormContact') }}" method="post" role="form" class="php-email-form">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Field harus diisi minimal 4 karakter" />
                <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Field harus diisi" />
                <div class="validate"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="judul_pesan" id="subject" placeholder="Judul Pesan" data-rule="minlen:4" data-msg="Field harus diisi minimal 4 karakter" />
            <div class="validate"></div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Field harus diisi" placeholder="Pesan"></textarea>
            <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
    </form>
</div>