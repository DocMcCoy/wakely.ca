@extends ('layouts.layout1')

@section ('title')
<title>About {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('top-nav')
<li class="brackets"><a href="/">Home</a></li>
<li class="brackets"><a class="active" href="/about">About</a></li>
<li class="brackets"><a href="/assignments">Assignments</a></li>
<li class="brackets"><a href="/projects">Personal Projects</a></li>
<li class="brackets"><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<main class="about-main">
    <div id="talk-bubble"></div>
    <img src="/img/profile-img.png" alt="" height="500px">
</main>
@endsection
