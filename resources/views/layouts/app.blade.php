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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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