<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Interior Design</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/subtle-slideshow.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main_style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="nice">
    <div>
        <main id="app">
            @yield('content')
        </main>
    </div>
    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js" ></script>
    <script src="js/jquery.magnific-popup.js" ></script>
    <script src="js/jquery.subtle-slideshow.js" ></script>
    <script src="js/lazyLoading.js"></script>
    <script src="js/main.js" ></script>
</body>

</html>