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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" 
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <!-- Body Layout for Main Pages -->
<body>
    <div class="wrapper">

        <!-- Header Image / Personal Logo -->
        <header>
            <img src="{{ asset('img/logo.svg') }}" alt="Wakely Logo" height="100px">
        </header>

        <!-- Sticky Nav Menu -->
        <nav>
            <ul>
                <li class="brackets"><a href="/">Home</a></li>
                <li class="brackets"><a href="/about">About</a></li>
                <li class="brackets"><a href="/assignments">Assignments</a></li>
                <li class="brackets"><a href="/projects">Personal Projects</a></li>
                <li class="brackets"><a href="/contact">Contact</a></li>
            </ul>
        </nav>

@yield ('content')


        <!-- Footer Navigation & copyright -->
        <footer>
            <ul>                
                <img src="{{ asset('img/logo.svg') }}" alt="Wakely Logo" height="50px">
                <li>David Wakely</li>
                <li><a href="mailto:david@wakely.ca">david@wakely.ca</a></li>
                <li><a href="tel:1-403-708-6600">(403) 708-6600</a></li>
            </ul>
                        <ul>
                <h5>School Assignments</h5>
            </ul>
            <ul>
                <h5>Personal Side Projects</h5>
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
            <span>Copyright © <?php echo date("Y"); ?> David Wakely</span>            
        </footer>  
    </div>
</body>
</html>


