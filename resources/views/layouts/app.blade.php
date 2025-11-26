<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'BytePro.nl')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo3.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('assets/libs/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/libs/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/libs/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/libs/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/libs/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/libs/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lightbox/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

