@extends ('layouts.layout1')

@section ('title')
<title>Assignments - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li class="brackets"><a href="/about">About</a></li>
<li><a class="active" href="/assignments">Assignments</a></li>
<li class="brackets"><a href="/projects">Personal Projects</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="assign-main">
<h2>PHP</h2>
<h3><a href="http://facebrick.ca" target="_blank">facebrick.ca</a></h3>
<p>This is the final project that was asked for in our PHP course. This course introduced us to the world of PHP and also the idea of MVC.</p>
Working on it.
</main>
@endsection