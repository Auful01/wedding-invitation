@extends('app.layout')


@section('content')
    <section id="home" class="container px-0 vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <h1 style="font-size: 40px" data-aos="fade-down">Undangan Pernikahan</h1>
        <div class="text-center mt-5" data-aos="fade-up">
            <h1 class="windsong-medium" style="font-size: 50px">Qorie </h1>
            <h1 class="windsong-medium m-0" style="font-size: 50px">&</h1>
            <h1 class="windsong-medium m-0" style="font-size: 50px">Auful</h1>
        </div>

        <div class="mt-5" data-aos="fade-up">
            <p>Ahad, 29 Juni 2025</p>
        </div>

        <div class="card border-0 mt-5 rounded-xl glass-bg w-75">
            <div class="card-body text-white">
                <p>Kepada</p>
                <p >Bapak/Ibu/Saudara(i)</p>
                <p class="mt-3" style="font-size: 30px" id="nama">
                    -
                </p>
                <small id="tempat">

                </small>
            </div>
        </div>
    </section>
    <section id="mempelai" data-aos="fade-up" class="container px-0 vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <p class="diwani" style="font-size: 40px; margin-bottom: 0;">
            بسم الله الرحمن الرحيم
        </p>

        <p class="mt-5">
            Dengan memohon rahmat dan ridho Allah SWT, kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara pernikahan kami
        </p>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="dynalight-regular" style="font-size: 30px">Qorie' Insyira Fitria</h2>
                <p>Putra dari Bapak Januar Sasongko & Ibu Sri Rosliawati</p>
            </div>
            <p class="col-md-12 windsong-medium m-0" style="font-size: 50px; margin: 0;">
                &
            </p>
            <div class="col-md-12">
                <h2 class="dynalight-regular" style="font-size: 30px">Muhammad Auful Kirom</h2>
                <p>Putri dari Bapak Santoso & Ibu Khusnul Khotimah</p>
            </div>
        </div>
    </section>
    <section id="acara" class="container px-0 vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <div class="card border-0" style="width: 100%; max-width: 600px;background-color: #f8f9fa17;" data-aos="fade-left">
            <div class="card-body text-white">
                <h2 class="" style="font-size: 40px">Akad Nikah</h2>
                <p class="mt-5">Kamis, 26 Juni 2025</p>
                <p>09.00 WIB - Selesai</p>
                <b>Kediaman Mempelai Wanita</b>
                <p>Jl. Bunga Cempaka Indah No. 7, Kel. Jatimulyo, Kec. Lowokwaru, Kota Malang</p>
            </div>
        </div>

         <div class="card border-0 mt-5" style="width: 100%; max-width: 600px;background-color: #f8f9fa17;" data-aos="fade-right">
            <div class="card-body text-white">
                <h2 class=" mt-5" style="font-size: 40px">Resepsi Pernikahan</h2>
                <p class="mt-5">Ahad, 29 Juni 2025</p>
                <p>14.00 WIB - Selesai</p>
                <b>Kediaman Mempelai Pria</b>
                <p>Dsn. Pandewatan, Desa Punggul RT 02 RW 03, Kec. Gedangan, Kab. Sidoarjo</p>
            </div>
        </div>
    </section>


    <section id="lokasi" class="container px-0 vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <div class="card glass-bg" style="width: 100%; max-width: 600px;">
            <div class="card-body text-white">
                <h2 class="" style="font-size: 40px">Lokasi</h2>
                <p>
                    Dsn. Pandewatan, Desa Punggul RT 02 RW 03, Kec. Gedangan, Kab. Sidoarjo
                </p>
                <div class="mt-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.9657718461524!2d112.7385129!3d-7.4019853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e469de718a91%3A0x7b002db0ff29278c!2sHPXQ%2B7F4%2C%20Pandewatan%2C%20Punggul%2C%20Kec.%20Gedangan%2C%20Kabupaten%20Sidoarjo%2C%20Jawa%20Timur%2061254!5e0!3m2!1sen!2sid!4v1718434412345!5m2!1sen!2sid"  style="border:0;border-radius: 10px;" allowfullscreen=""  class="map-responsive" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="card glass-bg mt-4" style="width: 100%; max-width: 600px;">
            <div class="card-body text-white">
                <h2 class="">Wedding Gift</h2>
                <p class="mt-3">Bagi Bapak/Ibu/Saudara(i) yang ingin memberikan hadiah, kami menyediakan rekening berikut:</p>
                <div class="mt-3">
                    <p class="fw-bold m-0">Bank Mandiri</p>
                    <div class="text-center d-flex justify-content-center align-items-center">
                        <p class="m-0 my-auto">1410018866897</p>
                        <button class="btn btn-sm" onclick="navigator.clipboard.writeText('1440017300580')">
                            <span class="material-symbols-outlined my-auto text-white" style="font-size: 20px;">
                            content_copy
                            </span>

                        </button>
                    </div>
                    <p>a.n. Muhammad Auful Kirom</p>
                </div>
            </div>
        </div>

    </section>


    <section id="forum" class="container px-0 vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <h2>Ucapakan Sesuatu</h2>

        <p class="mt-5">Kami sangat menghargai kehadiran dan doa restu dari Bapak/Ibu/Saudara(i) semua. Silakan tinggalkan pesan atau ucapan selamat di forum ini.</p>
        <div class="mt-5 w-100">
            <div class="card glass-bg">
                <div class="card-body text-white">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" required id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="konfirm" class="form-label">Konfirmasi Kehadiran</label>
                            <select class="form-select" id="konfirm" name="konfirm" required>
                                <option value="">Pilih</option>
                                <option value="hadir">Hadir</option>
                                <option value="tidak_hadir">Tidak Hadir</option>
                                <option value="mungkin">Mungkin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit-greetings">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- <div class="mt-5">
            <h3>Pesan Terkirim</h3>
            <ul id="greetings-list" class="list-unstyled">
                <!-- Pesan akan ditampilkan di sini -->
                <div class="card">
                    <div class="card-body">
                        <p>
                            <strong id="guest-name">Nama Tamu</strong>
                            <span class="text-muted" id="greeting-date">Tanggal</span>
                        </p>
                        <p class="mb-0" id="greeting-message">Selamat atas pernikahan Qorie' dan Auful! Semoga bahagia selalu.</p>
                    </div>
                </div>
            </ul>
        </div> --}}
    </section>

@endsection


@push('scripts')
    <script>
        $('#submit-greetings').on('click', function(e) {
            e.preventDefault();
            const message = $('#message').val();
            const konfirm = $('#konfirm').val();

            if (message && konfirm) {
                // Simulate sending data to the server
                console.log('Pesan:', message);
                console.log('Konfirmasi Kehadiran:', konfirm);
                alert('Pesan berhasil dikirim!');
                $('#message').val('');
                $('#konfirm').val('');
            } else {
                alert('Mohon isi semua field!');
            }
        });


        // GET guest name from server

        $(document).ready(function() {
            // Simulate fetching guest name from the server
            var guestId = new URLSearchParams(window.location.search).get('guestId');
            $.ajax({
                url: '/api/guests/' + guestId, // Replace with your actual API endpoint
                method: 'GET',
                success: function(response) {
                    $('#nama').text(response.name); // Assuming the response contains a 'name' field
                    $('#tempat').text(response.address); // Assuming the response contains an 'address' field
                },
                error: function() {
                    console.error('Failed to fetch guest name');
                }
            });
        });
    </script>

@endpush
