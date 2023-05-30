<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- 
            - primary meta tag
        -->
        <title>EduWeb - The Best Program to Enroll for Exchange</title>
        <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
        <meta name="description" content="This is an education html template made by codewithsadee">
        <!-- google  -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- jquery  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- 
            - favicon
        -->
        <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
        
        
        
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
        <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
        <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
        <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
        <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
        <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">
        @vite([ 'resources/css/HeaderAndFouter/Header.css', 'resources/css/Index.css'])


        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        @vite([ 'resources/js/Index.js' , 'resources/js/HeaderAndFouter/Header.js'])
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

    <!--  ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>