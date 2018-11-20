@extends ('layouts.layout1')

@section ('title')
<title>About {{ config('app.name', 'Wakely') }}</title>
@endsection

@section ('content')
<main class="about-main">
    <div id="talk-bubble"></div>
    <img src="/img/profile-img.png" alt="" height="500px">
</main>
@endsection
