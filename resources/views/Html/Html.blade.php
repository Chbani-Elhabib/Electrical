<!DOCTYPE html>
<html lang="{{$lang}}">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
        <meta name="description" content="This is an education html template made by codewithsadee">
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- google  -->
        <title>@yield('title')</title>

        <!--  favicon  -->
        <link rel="shortcut icon" href="/favicon/favicon.svg" type="image/svg+xml">

        <!-- 
            - primary meta tag
        -->
        <!-- google  -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- boststarp  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        
        
        <!-- 
            - google font link
        -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
        
        <!-- 
            - preload images
        -->
        <link rel="preload" as="image" href="/image/hero-bg.svg">
        <link rel="preload" as="image" href="/image/hero-banner-1.jpg">
        <link rel="preload" as="image" href="/image/hero-banner-2.jpg">
        <link rel="preload" as="image" href="/image/hero-shape-1.svg">
        <link rel="preload" as="image" href="/image/hero-shape-2.png">
        
        
        @vite([ 'resources/css/HeaderAndFouter/Header.css', 'resources/css/Index.css'])
        @yield('css')
        
        
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script defer src="https://apis.google.com/js/platform.js" async defer></script>
    </head>
<body>
    <!--  start Header -->
    @yield('Header')
    <!--  end Header -->


    <!--  start content  -->
    @yield('content')
    <!--  end content  -->


    <!--  start Fouter -->
    @yield('Fouter')
    <!--  end Fouter -->

    <!--  BACK TO TOP -->
    <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>
    <!--  ionicon link -->
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite([ 'resources/js/Index.js' , 'resources/js/HeaderAndFouter/Header.js'])
    @yield('js')
</body>
</html>