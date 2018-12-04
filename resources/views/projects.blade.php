@extends ('layouts.layout1')

@section ('title')
<title>Projects - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('hero-image')
<header class="home-image">
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li class="brackets"><a href="/about">About</a></li>
<li class="brackets"><a href="/assignments">Assignments</a></li>
<li><a class="active" href="/projects">Personal Projects</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="projects-main">
<h2>Personal Projects</h2>
    <section class="uo-project-card">
        <header class="uo-header">
            <h3>Untitled Offroad</h3>
        </header>
        <article class="uo-info">
            <h4>Untitled Offroad</h4>
            <p>Something something about Untitled Offroad</p>
        </article>
    </section>
    <section class="pa-project-card">
        <header class="pa-header">
            <h3>Peak Advisory</h3>
        </header>
        <article class="pa-info">
            <p>Something something something aobut Peak Advisory</p>
        </article>
    </section>
</main>
@endsection