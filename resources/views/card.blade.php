<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wakely') }}</title>

    <!-- Favicon -->
    <link href="{{{ asset('img/favicon.png') }}}" rel="shortcut icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" 
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Roboto:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="card-container">
        <div class="card-image-left"><img src="/img/code1.jpg" alt=""></div>
        <div class="card-description-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus at minima hic. Doloremque quam ducimus asperiores distinctio corporis reprehenderit velit alias enim, sed quo fugiat et eligendi nemo quae aperiam.</div>
        <div class="card-image-right"><img src="/img/code2.jpg" alt=""></div>
        <div class="card-description-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore molestias deserunt saepe voluptas quos pariatur voluptatibus, tenetur illo ipsam at sapiente sequi autem, natus sit, alias quaerat distinctio beatae quis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, unde laudantium ex necessitatibus aliquid et ad quas eius fugit quis dolore, veniam illum quidem, temporibus totam corporis rerum consectetur alias.</div>
        
    </div> 
    
</body>
</html>


