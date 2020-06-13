<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Interior Design</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/subtle-slideshow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="nice">
    <div>
        <main id="app">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}" ></script>
    <script src="{{ asset('js/jquery.subtle-slideshow.js') }}" ></script>
    <script src="{{ asset('js/lazyLoading.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" ></script>
</body>

</html>