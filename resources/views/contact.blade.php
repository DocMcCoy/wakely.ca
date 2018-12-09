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
        <h4>E-mail:</h4>
        <p><a href="mailto:david@wakely.ca">david@wakely.ca</a></p>
        <h4>Phone:</h4>
        <p><a href="tel:1-403-708-6600">(403) 708-6600</a></p>
        <h4>Mail:</h4>
        <p>PO Box 46034 Inglewood, Calgary, AB, T2G5H7, CANADA</p>
    </section>
    <iframe src="https://snazzymaps.com/embed/117752" width="100%" style="border:none;"></iframe>

    <form action="/contact" method="post" class="contact-form">
        {{ csrf_field() }}
        <div class=form-label-and-error>
            <label for="contact-name">Name: </label>
            @if ($errors->has('contact-name'))
            <div class=form-error>C'mon ... I need a name</div>
            @endif
        </div>
        <input type="text" name="contact-name" id="contact-name">
        <div class=form-label-and-error>
            <label for="contact-email">E-Mail: </label>
            @if ($errors->has('contact-email'))
            <div class=form-error>I'm not yelling my response back ... need an email</div>
            @endif
        </div>
        <input type="email" name="contact-email" id="contact-email">
        <div class=form-label-and-error>
            <label for="contact-textarea">Whatcha Wanna Tell Me?: </label>
            @if ($errors->has('contact-textarea'))
            <div class=form-error>If ya got somethin' to say ...</div>
            @endif
        </div>
        <textarea name="contact-textarea" id="contact-textarea" rows="5"></textarea>
        <input type="submit" id="contact-submit">
    </form>
</main>
@endsection