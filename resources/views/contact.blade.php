@extends ('layouts.layout1')

@section ('title')
<title>Contact - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('hero-image')
<header class="contact-image">
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
<h2>Contact Me</h2>
<section class="contact-info">
<h3>David Wakely</h3>
<h4>E-mail:</h4><p><a href="mailto:david@wakely.ca">david@wakely.ca</a></p>
<h4>Phone:</h4><p><a href="tel:1-403-708-6600">(403) 708-6600</a></p>
<h4>Mail:</h4><p>PO Box 46034 Inglewood, Calgary, AB, T2G5H7, CANADA</p>
</section>
<iframe src="https://snazzymaps.com/embed/117752" width="95%" height="300px" style="border:none;"></iframe>

<form action="" method="post" class="contact-form">
<p>Name</p><input type="text" name="contact-name" id="contact-name">
<p>E-Mail</p><input type="email" name="contact-email" id="contact-email">
<p>Whatcha wanna tell me</p><textarea name="contact-textarea" id="contact-textarea" rows="5"></textarea>
<!-- <input type="submit" id="contact-submit"> -->
<div id="contact-submit">Submit - disabled for now</div>
</form>

</main>
@endsection