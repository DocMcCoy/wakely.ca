@extends ('layouts.layout1')

@section ('title')
<title>Contact - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li class="brackets"><a href="/about">About</a></li>
<li class="brackets"><a href="/assignments">Assignments</a></li>
<li class="brackets"><a href="/projects">Personal Projects</a></li>
<li><a class="active" href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="contact-main">
Working on it!
</main>
@endsection