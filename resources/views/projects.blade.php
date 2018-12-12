@extends ('layouts.layout1')

@section ('title')
<title>Projects - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('hero-image')
<header class="project-image">
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li class="brackets"><a href="/about">About</a></li>
<li class="brackets"><a href="/assignments">Assignments</a></li>
<li><a class="active" href="/projects">Side Hustles</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="project-main">
    <section>
        <h2>Side Hustles</h2>
        <p>These are personal projects that I have been working on outside of class. Before I was building in raw code for websites, I was figuring out how to manage and host and design websites built with pre-built software. It was CMS software like Squarespace / Wordpress or forum software like vBulletin and Xenforo. I made sure that the hosting provided was working and had all the necessary files, the site looked great and that the users of the sites had some smooth sailing ...</p>
    </section>
    
    <section class="uo-project-card"><a href="https://untitledoffroad.com" target="_blank">
        <header class="uo-header">
            <img src="/img/screenshots/uo-screenshot-main.jpg" alt="Screenshot of the Untitled Offroad Homepage">
            <h3>Untitled Offroad</h3>
        </header>
        <article class="uo-info">
            <h4>Untitled Offroad</h4>
            <p>Untitled Offroad is a personal project that is very close to my heart. It involves two major components, a Squarespace built homepage and a hosted database and forum software. Click anywhere on the photo or text to learn more ...</p>
        </article>
    </a></section>
    <section class="pa-project-card"><a href="https://peakadvisory.ca">
        <header class="pa-header">
            <img src="/img/screenshots/pa-screenshot-main.jpg" alt="Screenshot of the Peak Advisory Homepage">
            <h3>Peak Advisory</h3>
        </header>
        <article class="pa-info">
            <h4>Peak Advisory</h4>
            <p>People that know I built the website and forum for Untitled Offroad have often asked if I can build them a website. Peak Advisory is one such client. Click anywhere on the photo or text to learn more ...</p>
        </article>
    </a></section>
</main>
@endsection