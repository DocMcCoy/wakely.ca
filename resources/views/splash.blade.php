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
<li class="brackets"><a href="/projects">Side Hustles</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section('content')
<!-- Content Container -->
<main class="home-main">
    <section>
        <div class="headings">
            <h1>Welcome to Wakely.ca</h1>
            <h2>Currently beta testing in public!</h2>
        </div>
        <div class="content">
            <p>I'm slowly getting this portfolio website off the ground by including my class exercises and assignments that I've completed for my Web Dev course that I'm taking at SAIT. I've also included some of the side projects that I've been working on before, during and after this course is over.</p>
            <p>Below you can find my featured project, the project I'm most proud of or the project I'm currently working on.</p>
        </div>
    </section>
    <section>
        <div class="headings">
            <h3>Featured Project</h3>
        </div>
        <article class="content">
            <p>To be honest ... I'm currently hammering this website together. This website is going to be part of my presentation for my SAIT Web Development course on Dec. 14th. If you see anything I should work on or any errors, I'd appreciate any heads up and any constructive criticism you have. Also be sure to cross your fingers and wish me well with this thing.</p>
        </article>
    </section>
    <section>
        <div class="summary-image">
            <img src="/img/calgary-full-moon.jpg" alt="Full Moon Over Downtown Calgary circa 2018">
            <span>Downtown Calgary circa February 2018 - Photo by Me - © <?php echo Date('Y') ?></span>
        </div>
        <div class="summary-image">
            <img src="/img/peace-bridge-calgary-wakely-home-page.jpg" alt="Peace Bridge leading to downtown Calgary">
            <span>Peace Bridge Leading Into Downtown Calgary - Photo by <a href="https://unsplash.com/photos/IzyKe_nNx2A?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Riley McNeal</a> on <a href="https://unsplash.com/photos/IzyKe_nNx2A?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> - Photoshop Edit by Me - © <?php echo Date('Y') ?></span>
        </div>
        <div class="summary-image">
            <img src="/img/calgary-tower-wakely.jpg" alt="Peace Bridge leading to downtown Calgary">
            <span>Calgary Tower from Centre Street - Photo by  on Unsplash <a href="https://unsplash.com/photos/cmk_zYwlQ5A?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">asweseeit.ca CANADA</a> on <a href="https://unsplash.com/photos/cmk_zYwlQ5A?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> - Photoshop Edit by Me - © <?php echo Date('Y') ?></span>
        </div>

    </section>
    <section>
        <div class="headings">
            <h2>About Me</h2>
        </div>
        <article class="content">
            <p>Here's my deal. I'm a Calgary boy, born and mostly raised and I'm currently operating out of Calgary doing Web Development.</p>
            <p>I've always been very interested in computer technologies. Been building my own PCs since long before I could drink. Interned at one of the first ISPs in Calgary called Logical Solutions. Worked as service advisor for a computer repair company, self studied myself to get CompTia A+ certified and promoted to a computer tech. Switched gears for a while and did very well as an industrial electrician. Even there, was involved with talking to the PLCs (programmable logic controllers) that ran and controlled these sites.</p> 
            <p>But I've been called back to my first love; computers, technology and the hug that brings it all together, the internet.</p>
            <a href="/about"><p>Click here to see more...</p></a>
        </article>
    </section>
</main>
@endsection