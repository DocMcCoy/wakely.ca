<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wakely') }}</title>

    <!-- Favicon -->
    <link href="{{{ asset('img/favicon.png') }}}" rel="shortcut icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" 
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Roboto:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <!-- Splash Layout -->
<body>
    <div class="wrapper">

        <!-- Header Image / Personal Logo -->
        <header>
            <img src="{{ asset('img/logo.svg') }}" alt="Wakely Logo" height="100px">
        </header>

        <!-- Sticky Nav Menu -->
        <nav>
            <ul>
                <li class="brackets"><a href="#">Home</a></li>
                <li class="brackets">About</li>
                <li class="brackets">Assignments</li>
                <li class="brackets">Personal Projects</li>
                <li class="brackets">Contact</li>
            </ul>
        </nav>

        <!-- Content Container -->
        <main>
            <summary>
                <div class="banner">
                    <h1>Welcome to Wakely.ca</h1>
                    <h2>Hello World! v. 2.0</h2>
                </div>

                <p>
                    Welcome to my website! I'm getting this portfolio website off the ground by including my class exercises and assignments that I've completed for my Web Dev course that I'm taking at SAIT. I've also included some of the side projects that I've been working on before, during and after this course is over.
                </p>
                <p>I hope you enjoy what you are about to witness.</p>
            </summary>
            <div class="banner">
                <h3>About Me</h3>
            </div> 
                <article>
                    <p>Here's my deal. I've always been very interested in computer technologies. Been building my own PCs since long before I could drink. Interned at one of the first ISPs in Calgary called Logical Solutions. Worked as service advisor for a computer repair company, self studied myself to get CompTia A+ certified and promoted to a computer tech. Switched gears for a while and did very well as an industrial electrician. Even there, was involved with talking to the PLCs (programmable logic controllers) that ran and controlled these sites.</p> 
                    <p>But I've been called back to my first love; computers, technology and the hug that brings it all together, the internet.</p>
                    <p>Click here to see more...</p>   
                </article>
             
            <div class="banner">
                <h3>Featured Project</h3>
            </div>
                <article>
                    <p>
                        Current Project
                    </p>
                </article>
            
        </main>

        <!-- Footer Navigation & copywright -->
        <footer>
            <ul>                
                <img src="{{ asset('img/logo.svg') }}" alt="Wakely Logo" height="50px">
                <li>David Wakely</li>
                <li>david@wakely.ca</li>
                <li>(403) 708-6600</li>
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
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-github-square"></i>
                <i class="fab fa-bitbucket"></i>
                </div>
            </div>
            <span>Copyright © <?php echo date("Y"); ?> David Wakely</span>            
        </footer>  
    </div>
</body>
</html>

            