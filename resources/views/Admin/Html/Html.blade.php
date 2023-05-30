<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
        <!-- ======= Styles ====== -->
        @vite([ 'resources/css/Admin/HeaderAndNav/Nav.css' ])
        @yield('css')
    </head>
    <body>

        <div class="container">

            <!--  start Header -->
            @yield('Header')
            <!--  end Header -->

            <!--  start Nav -->
            @yield('Nav')
            <!--  end Nav -->

            <!--  start content  -->
            @yield('content')
            <!--  end content  -->

        </div>

        <!-- ======= js ====== -->
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        @vite([ 'resources/js/Admin/HeaderAndNav/Nav.js' ])
        @yield('js')
        <!-- ====== ionicons ======= -->
        <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>

</html>