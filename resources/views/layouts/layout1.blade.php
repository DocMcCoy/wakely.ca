<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield ('title')

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
        @yield ('hero-image')
            <a href="/"><img class="header-logo" src="{{ asset('img/logo.svg') }}" alt="Wakely Logo"></a>
        </header>

        <!-- Sticky Nav Menu -->
        <nav>
            <ul>
                @yield ('top-nav')
            </ul>
        </nav>

        <div class="arrow bounce"><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i></div>
        </div>

    </div>

@yield ('content')

        <!-- Footer Navigation & copyright -->
    <div class="wrapper">
        <footer>
            <ul>                
                <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="Wakely Logo" height="50px"></a>
                <li><a href="/contact">David Wakely</a></li>
                <li><a href="mailto:david@wakely.ca">david@wakely.ca</a></li>
                <li><a href="tel:1-403-708-6600">(403) 708-6600</a></li>
            </ul>
            <ul>
                <a href="/assign"><h5>Assignments</h5></a>
            </ul>
            <ul>
                <a href="/projects"><h5>Side Hustles</h5></a>
            </ul>
            <div>
                <h5>Follow Me</h5>
                <div class="socialcontainer">
                <a href="https://www.facebook.com/wakelydev/"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/wakelydev"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.linkedin.com/company/wakelydev/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/wakelydev/"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/DocMcCoy"><i class="fab fa-github-square"></i></a>
                <a href="https://bitbucket.org/DocMcCoy/"><i class="fab fa-bitbucket"></i></a>
                </div>
            </div>
            <span>Copyright © <?php echo date("Y"); ?> David Wakely - <a href="#">Privacy Policy</a></span>            
        </footer>  
    </div>
</body>
</html>


