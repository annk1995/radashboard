<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rethouse - Real Estate HTML Template">
        <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency">
        <meta name="author" content="mardianto - retenvi.com">
        <title>Rileys Real E</title>

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:image" content="">
        <meta name="twitter:url" content="">
        <meta name="twitter:card" content="">

        <link rel="manifest" href="site.webmanifest">
        <!-- favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="icon.png">
        <meta name="theme-color" content="#3454d1">
        <link href="{{ asset('site/assets/css/styles.css') }}" rel="stylesheet">
    </head>

    <body data-aos-easing="ease-in-out-sine" data-aos-duration="1000" data-aos-delay="0">
        <!-- NAVBAR TOP -->

        <!-- END NAVBAR TOP -->
      {{-- navbar was here --}}
      @include('body.header')
        <!-- CAROUSEL -->


                <!--=========================================
    =            Section Gallery two            =
    ==========================================-->
             @yield('home')
      {{-- footer was here --}}
      @include('body.footer')
        <!-- SCROLL TO TOP -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TO TOP -->
        <script src="{{ asset('site/assets/js/index.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    </body>
</body>
</html>

