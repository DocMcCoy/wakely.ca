@extends ('layouts.layout1')

@section('title')
<title>{{ config('app.name', 'Wakely') }}</title>
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
<main>
    <summary class="wrapper">
        <div class="headings">
            <h1>Welcome to Wakely.ca</h1>
            <h2>Hello World! (aka - beta testing in public)</h2>
        </div>
        <div class="content">
            <p>Welcome to my website! I'm getting this portfolio website off the ground by including my class exercises and assignments that I've completed for my Web Dev course that I'm taking at SAIT. I've also included some of the side projects that I've been working on before, during and after this course is over.</p>
            <p>I hope you enjoy what you are about to witness.</p>
        </div>
        <div class="summary-image">
        </div>
        
    </summary>
    <div>
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
@endsection