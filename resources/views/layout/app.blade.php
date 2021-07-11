<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC @yield('title', 'Comics')</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../sass/app.scss">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    
    <!-- @-yield('css')
    @-yield('js') -->

</head>
<body>
    
    <!-- HEADER -->
    @include('partials.header')
    
    
   

    <!-- MAIN -->
    <main id="site_main">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')
</body>
</html>