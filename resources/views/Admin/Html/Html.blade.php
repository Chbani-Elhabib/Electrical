<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!-- ======= Styles ====== -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.7/datatables.min.css"/>
        @vite([ 'resources/css/Admin/HeaderAndNav/Nav.css' ])
        @yield('css')
    </head>
    <body>

        <div class="containere">

            <!--  start Header -->
            @yield('Header')
            <!--  end Header -->


            <!--  start Header -->
            <div class="show-data"></div>
            <!--  end Header -->

            <!--  start Nav -->
            @yield('Nav')
            <!--  end Nav -->

            <!--  start content  -->
            @yield('content')
            <!--  end content  -->

        </div>

        <!-- ======= js ====== -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script defer type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.7/datatables.min.js"></script>
        @vite([ 'resources/js/Admin/HeaderAndNav/Nav.js' ])
        @yield('js')
    </body>

</html>