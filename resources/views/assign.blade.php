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
        <h5>aka - things I was forced to do ... and things I went above and beyond for my own edification</h3>
    </div>
</section>
<section class="assign-php">
    <h2>PHP</h2>
    <p>Our PHP course was taught to us by Cameron Falkenhagen. The whole thing was an eye opening experience. We walked through the basics of PHP of course but it was also our first deep dive into a framework and the concept of the Model View Controller. The structure and seperation of tasks in the MVC really resonated with me. We also had a chance to setup virtual servers in both the Google Cloud and Amazon Web Services and deploy our sites using FTP and Git.</p>
    <article>
        <h3><a href="http://facebrick.ca" target="_blank">facebrick.ca</a></h3>
        <p>This is the final project that was asked for in our PHP course. This course introduced us to the world of PHP and also the idea of MVC.</p>
    </article>
</section>

<section>
    <h2>JavaScript</h2>
    <p>Heather Tovey was our instructor for this and even though she was a great instructor this is where I really wondered if I had gotten in over my head at the start. Having 0 programming experience meant I was playing catch up for even the basic concepts. I feel like I started catching my stride about mid-course. After having done a little PHP, I was able to come back to this and feel like I had a much better grasp.</p>
    <article>
        <h3><a href="https://docmccoy.github.io/sait-js/final_project/">Imperial Travel Agency</a></h3>
        <p>This was our final project in the JavaScript course. We were tasked with creating a 4 page website with a number of javascript elements.</p> 
    </article>
    
    <article>
        <h3><a href="https://docmccoy.github.io/sait-js/day7/exercise/">Day 7 Exercise - Lyrics</a></h3>
        <p>A fun exercise in the JavaScript course involving retrieving data from a song lyric API.</p>
    </article>
    
    <article>
        <h3><a href="https://docmccoy.github.io/sait-js/day6/exercise/">Day 6 Exercise - Color Palette Generator</a></h3>
        <p>This is where getting the code to do what I want started to take shape ... a color palette generator. Fully responsive.</p>
    </article>
</section>

<section>
    <h2>HTML & CSS</h2>
    <p>Off to the races. After a brief introduction into the concept of design, we jumped into getting some markup done with our instructor Gary Jennings. While I have never played with a markup language before, I understood the basic formatting of the code pretty quickly. Gary made it pretty easy to understand the concepts and provided a ton of additional reference material.</p>
    <h3><a href="https://docmccoy.github.io/Assignment4/">Final Assignment HTML</a></h3>
    <p>Goal was to create a fully responsive 4 page static website. Also implemented our first little bit of JavaScript with the addition of the mobile menu.</p>
    
    <h3><a href="https://docmccoy.github.io/Assignment3/">Assignment 3 in HTML</a></h3>
    <p>Created a single page static site with various CSS effects that is fully responsive. Modeled after the Untitled Offroad website that I maintain. This in turn has inspired a number of changes that will be implemented on the actual Untitled Offroad website.</p>
    
    <h3><a href="https://docmccoy.github.io/Assignment2/">Assignment 2 in HTML</a></h3>
    <p>Just testing various ideas and concepts of using an applying CSS to our markup. Very cool to see how far we've come.</p>
</section>

</main>
@endsection