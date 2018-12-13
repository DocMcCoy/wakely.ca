@extends ('layouts.layout1')

@section ('title')
<title>About - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('hero-image')
<header class="about-image">
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li><a class="active" href="/about">About</a></li>
<li class="brackets"><a href="/assignments">Assignments</a></li>
<li class="brackets"><a href="/projects">Side Hustles</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="about-main">
    <img id="about-img-one" src="/img/about/about-david-wakely-motorcycle.jpg" alt="David Wakely standing beside his Triumph Scrambler Motorcycle">
    <div class="speech-card-left">
        <blockquote class="rectangle-speech-border">
            <p>Hi! I'm David Wakely. I'm building up this website currently. Excuse the mess as I get this thing up and running.</p>
        </blockquote>
        <img class="profile-circle" src="/img/profile-img.png" alt="" height="500px">
    </div>
    <div class="speech-card-right">
        <blockquote class="rectangle-speech-border-right">
            <p>Now that's out of the way, I'm the kind of person that likes to make things happen. Wether that's in coding HTML, JS, PHP or in real life and going on an adventure!</p>
        </blockquote>
        <img class="profile-circle" src="/img/profile-img.png" alt="" height="500px">
    </div>
    <img id="about-img-two" src="/img/about/about-david-wakely-arctic-ocean.jpg" alt="David Wakely and Untitled Offroad at the Arctic Ocean in Tuktoyaktuk">
    <div class="speech-card-left">
        <blockquote class="rectangle-speech-border">
            <p>Just before I enrolled in the SAIT Web Dev program I had organized a group of people to drive 10,000km round trip stopping in Tuktoyaktuk just so I could swim in the arctic ocean. I put that level of maximum effort into everything I'm passionate about. So you can be sure that I'll do the same for your project.</p>
        </blockquote>
        <img class="profile-circle" src="/img/profile-img.png" alt="" height="500px" class="right">
    </div>
    <div class="speech-card-right">
        <blockquote class="rectangle-speech-border-right">
            <p>Thanks for checking out the site! Contact me via the <a href="/contact">contact</a> page if you need any more info. Be sure to follow me and Wakely Dev on social media. Check the links in the footer!</p>
        </blockquote>
        <img class="profile-circle" src="/img/profile-img.png" alt="" height="500px" class="right">
    </div>
</main>
@endsection
