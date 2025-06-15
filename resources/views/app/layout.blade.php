<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APERGU</title>
    <link href="https://fonts.googleapis.com/css2?family=Dynalight&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/careers.css">
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    .windsong-regular {
        font-family: "WindSong", cursive;
        font-weight: 400;
        font-style: normal;
    }

    .windsong-medium {
        font-family: "WindSong", cursive;
        font-weight: 500;
        font-style: normal;
    }

    .dynalight-regular {
        font-family: "Dynalight", cursive;
        font-weight: 400;
        font-style: normal;
    }

    body {
        background-color: #050606;
        font-family: 'Poppins', sans-serif;
        color: #fff;
    }

    .navbar {
        background-color: #05060600 !important;
        backdrop-filter: blur(8px);
    }

    .clr-primary {
        color: #326358;
    }

    .bt-primary {
        background-color: #326358;
        border-color: #326358;
        color: #fff;
    }

    .bt-primary:hover {
        background-color: #fff;
        border-color: #326358;
        color: #326358;
    }

    .section {
        /* height: 100vh; */
        padding: 100px 0;
    }

    .carousel {
        width: 100%;
        height: 100%;
    }

    .navbar-toggler {
        background-color: #fff;
    }

    a {
        color: #fff;
        text-decoration: none;
        list-style: none;
    }

    .text-justify {
        text-align: justify;
    }

    .text-mobile {
        text-align: left;
    }

    @media (max-width: 768px) {
        .text-mobile {
            text-align: center;
        }
    }

    .blogs-thumb {
        width: 600px;
        height: 300px;
        object-fit: cover;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        padding: 25px 25px 25px 25px;
        max-width: 550px;
        width: 100%;
        background-color: #326358;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 22px;
    }

    .formbold-input-flex>div {
        width: 100%;
        display: flex;
        flex-direction: column-reverse;
    }

    .formbold-textarea {
        display: flex;
        flex-direction: column-reverse;
    }

    .formbold-form-input {
        width: 100%;
        padding-top: 5px;
        padding-bottom: 5px;
        border: none;
        border-bottom: 1px solid #DDE3EC;
        border-radius: 5px;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #07074D;
        outline: none;
        resize: none;
    }

    .formbold-form-input::placeholder {
        color: #7784a4;
    }

    .formbold-form-label {
        color: white;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        display: block;
        margin-bottom: 18px;
    }

    .formbold-input-file {
        margin-top: 30px;
    }

    .formbold-input-file input[type="file"] {
        position: absolute;
        top: 6px;
        left: 0;
        z-index: -1;
    }

    .formbold-input-file .formbold-input-label {
        display: flex;
        align-items: center;
        gap: 10px;
        position: relative;
    }

    .formbold-filename-wrapper {
        display: flex;
        flex-direction: column;
        gap: 6px;
        margin-bottom: 22px;
    }

    .formbold-filename {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 14px;
        line-height: 24px;
        color: #536387;
    }

    .formbold-filename svg {
        cursor: pointer;
    }

    .formbold-btn {
        align-items: center;
        font-size: 16px;
        border-radius: 5px;
        border-color: white;
        padding: 12px 25px;
        font-weight: 500;
        background-color: #326358;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 300px;
        width: 500px;
    }

    .font-underline {
        text-decoration: underline;
    }

    .mobile-bottom-nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 10px 0;
        display: flex;
        justify-content: space-around;
    }

    .desktop-nav {
        display: block;
    }
    @media (max-width: 768px) {
        .mobile-bottom-nav {
            display: flex;
        }

        .desktop-nav {
            display: none;
        }
    }

    .glass-bg {
        background: rgba(255, 255, 255, 0.1); /* semi-transparent white */
        border-radius: 12px;
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px); /* Safari support */
        border: 1px solid rgba(255, 255, 255, 0.2); /* subtle border */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* optional shadow */
    }

    /* Import diwani font */
    @font-face {
        font-family: 'Diwani';
        src: url('{{ asset('fonts/Diwani Letter Regular/Diwani Letter Regular.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .diwani {
        font-family: 'Diwani', cursive;
        font-weight: normal;
        font-style: normal;
    }

    .map-responsive {
        width: 570px;
        height: 400px;
    }

    @media (max-width: 768px) {
        .map-responsive {
            width: 100%;
            height: 300px;
        }
    }



</style>

<body style="overflow-x: hidden">

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-3 desktop-nav" hidden>
        <div class="container">
            <a class="navbar-brand text-white" href="/">
                {{-- <img src="{{ asset('images/apergu.png') }}" alt="" width="45" height="24"
                    class="d-inline-block align-text-top"> --}}
                    Q&A
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item my-auto ">
                        <a class="nav-link text-white active" aria-current="page" href="/guests">Guests</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" aria-current="page" href="/greetings">Comments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    {{-- Bottom Nav Bar --}}


    <div class="mobile-bottom-nav px-0 mx-0 w-100">
        <div class="w-75 glass-bg">
            <div class="row px-4 py-2 justify-content-around">
                <div class="col-auto">
                    <a class="nav-link text-white" href="#home">
                        <span class="material-symbols-outlined">
                            home_app_logo
                        </span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="nav-link text-white" href="#mempelai">
                        <span class="material-symbols-outlined">
                            diversity_1
                        </span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="nav-link text-white" href="#acara">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="nav-link text-white" href="#lokasi">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="nav-link text-white" href="#forum">
                        <span class="material-symbols-outlined">
                            forum
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('owlcarousel/dist/owl.carousel.min.js') }}"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script>
        function swal(params) {
            return Swal.fire({
                icon: params.icon,
                title: params.title,
                text: params.text,
                showConfirmButton: params.showConfirmButton,
                showCancelButton: params.showCancelButton,
                confirmButtonText: params.confirmButtonText,
                cancelButtonText: params.cancelButtonText,
            });
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @stack('scripts')
    @stack('style')
    <script>
        AOS.init();
    </script>
    <!-- Google tag (gtag.js) -->
</body>

</html>
