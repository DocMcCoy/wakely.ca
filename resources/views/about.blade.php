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
<li class="brackets"><a href="/projects">Personal Projects</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="about-main">
    <blockquote class="rectangle-speech-border">
        <p>Hi! I'm David Wakely. I'm building up this website currently. Excuse the mess as I get this thing up and running.</p>
    </blockquote>
    <img src="/img/profile-img.png" alt="" height="500px">
    <blockquote class="rectangle-speech-border">
        <p>Thanks for checking out the site! Be sure to follow me and Wakely Dev on social media. Check the links in the footer!</p>
    </blockquote>
    <img src="/img/profile-img.png" alt="" height="500px">
</main>
@endsection
