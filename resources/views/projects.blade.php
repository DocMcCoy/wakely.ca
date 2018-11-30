@extends ('layouts.layout1')

@section ('title')
<title>Projects - {{ config('app.name', 'Wakely') }}</title>
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
Working on it!
</main>
@endsection