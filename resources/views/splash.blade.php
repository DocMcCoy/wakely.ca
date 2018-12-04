@extends ('layouts.layout1')

@section('title')
<title>{{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('hero-image')
<header class="home-image">
@endsection

@section ('top-nav')
<li><a class="active" href="/">Home</a></li>
<li class="brackets"><a href="/about">About</a></li>
<li class="brackets"><a href="/assignments">Assignments</a></li>
<li class="brackets"><a href="/projects">Personal Projects</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section('content')
<!-- Content Container -->
<main class="home-main">
    <summary class="home-wrapper">
        <div class="headings">
            <h1>Welcome to Wakely.ca</h1>
            <h2>Hello World!</h2>
            <h2>(aka - beta testing in public)</h2>
        </div>
        <div class="content">
            <p>Welcome to my website! I'm getting this portfolio website off the ground by including my class exercises and assignments that I've completed for my Web Dev course that I'm taking at SAIT. I've also included some of the side projects that I've been working on before, during and after this course is over.</p>
            <p>I hope you enjoy what you are about to witness.</p>
        </div>
        <div class="summary-image">
        </div>
    </summary>

    <div class="headings">
        <h2>About Me</h2>
    </div>
    <div class="content">
        <p>Here's my deal. I've always been very interested in computer technologies. Been building my own PCs since long before I could drink. Interned at one of the first ISPs in Calgary called Logical Solutions. Worked as service advisor for a computer repair company, self studied myself to get CompTia A+ certified and promoted to a computer tech. Switched gears for a while and did very well as an industrial electrician. Even there, was involved with talking to the PLCs (programmable logic controllers) that ran and controlled these sites.</p> 
        <p>But I've been called back to my first love; computers, technology and the hug that brings it all together, the internet.</p>
        <a href="/about"><p>Click here to see more...</p></a>
    </div>

    <div class="headings">
        <h3>Featured Project</h3>
    </div>

    <div class="content">
        <p>To be honest ... I'm currently hammering this website together. This project is due on Dec. 14th</p>
    </div>   
</main>
@endsection