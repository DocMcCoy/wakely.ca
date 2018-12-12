<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>404 - {{ config('app.name', 'Wakely') }}</title>

        <!-- Favicon -->
        <link href="{{{ asset('img/favicon.png') }}}" rel="shortcut icon">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129792997-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-129792997-1');
        </script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.gstatic.com" rel="dns-prefetch">
        <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" 
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
            crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <!-- Body Layout for Main Pages -->
    <body>
        <div class="wrapper hero">

            <!-- Header Image / Personal Logo -->
            <header class="fourohfour">
                <div class="fourohfour-top-text">
                    <p>Either we haven't built what you clicked on <i>or</i> ... you might be lost.</p>
                </div>
                <h2>404</h2>
                <div class="fourohfour-bottom-text">
                    <p>Click on "Go Back" and then try clicking on something else ;)</p>
                </div>
            </header>

            <!-- Sticky Nav Menu -->
            <nav>
                <ul>
                    <li><span class="active">Error</span></li>
                    <li class="brackets"><a href="/goback">Go Back</a></li>
                </ul>
            </nav>

        </div>
    </body>
</html>

