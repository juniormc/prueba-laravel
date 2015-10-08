<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba @yield('title')</title>
        <!-- CSS -->
        @section('css')
        @show
        
        <!--[if lt IE 9]>
        <![endif]-->
    </head>
    <body>
        <!-- header -->
        <header>
            @include('header')
        </header>
    @yield('content')
    <!-- footer -->
    <footer>
        @include ('footer')
    </footer>
    <!-- scripts -->
    
    @section('js')
    @show
</body>
</html>