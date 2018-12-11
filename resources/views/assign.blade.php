@extends ('layouts.layout1')

@section ('title')
<title>Assignments - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('hero-image')
<header class="assign-image">
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li class="brackets"><a href="/about">About</a></li>
<li><a class="active" href="/assignments">Assignments</a></li>
<li class="brackets"><a href="/projects">Side Hustles</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="assign-main">

<section>
    <div class="headings">
        <h2>Web Development Assignments from SAIT</h2>
        <h3>aka - things I was forced to do ... and things I went above and beyond for my own edification</h3>
    </div>
</section>
<h2>PHP</h2>
<h3><a href="http://facebrick.ca" target="_blank">facebrick.ca</a></h3>
<p>This is the final project that was asked for in our PHP course. This course introduced us to the world of PHP and also the idea of MVC.</p>
Working on it.

<h2>JavaScript</h2>
<h3><a href="https://docmccoy.github.io/sait-js/final_project/">Imperial Travel Agency</a></h3>
<p>This was our final project in the JavaScript course. We were tasked with creating a 4 page website with a number of javascript elements.</p>

<h3><a href="https://docmccoy.github.io/sait-js/day7/exercise/">Day 7 Exercise - Lyrics</a></h3>
<p>A fun exercise in the JavaScript course involving retrieving data from a song lyric API.</p>

<h3><a href="https://docmccoy.github.io/sait-js/day6/exercise/">Day 6 Exercise - Color Palette Generator</a></h3>
<p>This is where getting the code to do what I want started to take shape ... a color palette generator. Fully responsive.</p>

<h3><a href="https://docmccoy.github.io/sait-js/day5/exercise/">Day 5 Exercise</a></h3>
<p>Building forms</p>

<h3><a href="https://docmccoy.github.io/sait-js/day4/exercise/">Day 4 Exercise - Quote Machine</a></h3>
<p>Creating a quote slide show with Javascript</p>

<h2>HTML & CSS</h2>
<h3><a href="https://docmccoy.github.io/Assignment4/">Final Assignment HTML</a></h3>
<p>Goal was to create a fully responsive 4 page static website. Also implemented our first little bit of JavaScript with the addition of the mobile menu.</p>

<h3><a href="https://docmccoy.github.io/Assignment3/">Assignment 3 in HTML</a></h3>
<p>Created a single page static site with various CSS effects that is fully responsive. Modeled after the Untitled Offroad website that I maintain. This in turn has inspired a number of changes that will be implemented on the actual Untitled Offroad website.</p>

<h3><a href="https://docmccoy.github.io/Assignment2/">Assignment 2 in HTML</a></h3>
<p>Just testing various ideas and concepts of using an applying CSS to our markup. Very cool to see how far we've come.</p>

<h3><a href="https://docmccoy.github.io/Assignment1/">Assignment 1 in HTML</a></h3>
<p>Our very first bit of coding in the SAIT Web Dev course. I had picked up the HTML and CSS portions pretty quickly so i had gone quite a bit above and beyond the requirements for this one. We were given some content and asked to style it in a few various ways. In addition to the assignment itself, I also wrapped the whole thing in a rsponsive container with an external menu so that I could make the whole thing feel much more cohesive. Learned how to do some CSS hover effects and played with menus.</p>

</main>
@endsection