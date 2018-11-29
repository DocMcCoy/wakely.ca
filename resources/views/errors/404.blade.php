@extends ('layouts.layout1')

@section('title')
<title>404 - {{ config('app.name', 'Wakely') }}</title>
@endsection

@section('top-nav')
<li><span class="active">Error</span></li>
<li class="brackets"><a href="/">Go Back</a></li>
@endsection

@section('content')
<main>
    <div class="fourohfour">
        <h2>404</h2>
        <div>
            <p>Either we haven't built what you clicked on <i>or</i> ... you might be lost.</p>
            <p>Try clicking on something else ;)</p>
        </div>
    </div>
</main>
@endsection