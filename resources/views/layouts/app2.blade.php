<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Music Manager') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('/') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">


    <link rel="icon" type="image/png" href="../image/logo.png">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css?v=2.0.2')}}" rel="stylesheet" />
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="g-sidenav-show  ">
    <divid="app">
  
        <main  class="main-content position-relative border-radius-lg ">
            @yield('content')
        </main>
    </div>
</body>
</html>
