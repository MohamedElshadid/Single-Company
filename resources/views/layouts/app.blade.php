<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','A default title')</title>
    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/subtle-slideshow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@stack('token')
</head>

<body class="nice">


        <main id="app">
            @yield('content')
        </main>
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('js/map.js') }}" ></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}" ></script>
    <script src="{{ asset('js/jquery.subtle-slideshow.js') }}" ></script>
    <script src="{{ asset('js/lazyLoading.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=45185f8a-5595-4dca-a730-067482a1af71" type="text/javascript"></script>

  @stack('quizscript')
  @stack('consultation')

  
</body>

</html>