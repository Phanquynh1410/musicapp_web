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
<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100" id="app">
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../image/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Music Manager</span>
      </a>
    </div>
    
    <hr class="horizontal dark mt-0">
    <div class=" " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item" id="home">
          <a class="nav-link " href="{{route('home')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manager</h6>
        </li>
        <li class="nav-item" id="topic">
          <a class="nav-link " href="{{route('topic.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Topic</span>
          </a>
        </li>
        <li class="nav-item" id="cate">
          <a class="nav-link " href="{{route('cate.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
        </li>
        <li class="nav-item" id="album">
          <a class="nav-link " href="{{route('album.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Album</span>
          </a>
        </li>
        <li class="nav-item" id="playlist">
          <a class="nav-link " href="{{route('playlist.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Playlist</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Song Manager</h6>
        </li>
        <li class="nav-item" id="adver">
          <a class="nav-link " href="{{route('adver.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-notification-70 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Advertisement</span>
          </a>
        </li>
        <li class="nav-item" id="song">
          <a class="nav-link " href="{{route('song.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-headphones text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Song</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account Manager</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('register')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>

        <main  class="main-content position-relative border-radius-lg " >
        
        <nav class="navbar navbar-expand-md ">
            <div class="container">
             <form action="{{url('search')}}" type ="get">
              <input type="text" name="query" style="float: left; border-radius: 5px; border: 1px; margin-top: 20px;">
                <button type="submit" class="btn btn-outlight-light" style="margin-left: 10px; background-color: #ffa15e; color: #ffffff; border-radius: 5px; border-color: #98a6eb; outline: none; margin-top: 15px;">Search</button>
             </form>
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 400px;">
                    <ul class="navbar-nav mr-auto" >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a style="color: #ffffff; padding-top: 20px;" id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li>
                            <div style="text-align: right; margin-top: 5px; padding-top: 10px; margin-left: 20px;">
                                   <button class="btn btn-danger"> <a style="color: #ffffff;" class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} 
                                    </a></button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <!-- End Navbar -->
            @yield('content')
        </main>
    </div>
</body>
<script>
  var home = document.getElementById("home");
  var topic = document.getElementById("topic");


  topic.onclick = function () {
    topic.style.background = "#E6E6FA";
    home.style.background = "#ffffff";
    cate.style.background = "#ffffff";
    album.style.background = "#ffffff";
  };

  cate.onclick = function () {
    cate.style.background = "#E6E6FA";
    topic.style.background = "#ffffff";
    home.style.background = "#ffffff";
    album.style.background = "#ffffff";
    playlist.style.background = "#ffffff";
  };
  
  home.onclick = function () {
    home.style.background = "#E6E6FA";
    topic.style.background = "#ffffff";
    cate.style.background = "#ffffff";
    album.style.background = "#ffffff";
    playlist.style.background = "#ffffff";
    adver.style.background = "#ffffff";
    song.style.background = "#ffffff";
  };

  album.onclick = function () {
    album.style.background = "#E6E6FA";
    topic.style.background = "#ffffff";
    cate.style.background = "#ffffff";
    home.style.background = "#ffffff";
    playlist.style.background = "#ffffff";
    adver.style.background = "#ffffff";
    song.style.background = "#ffffff";
  };

  playlist.onclick = function () {
    playlist.style.background = "#E6E6FA";
    topic.style.background = "#ffffff";
    cate.style.background = "#ffffff";
    home.style.background = "#ffffff";
    album.style.background = "#ffffff";
    adver.style.background = "#ffffff";
    song.style.background = "#ffffff";
  };
  
  adver.onclick = function () {
    playlist.style.background = "#E6E6FA";
    topic.style.background = "#ffffff";
    cate.style.background = "#ffffff";
    home.style.background = "#ffffff";
    album.style.background = "#ffffff";
    playlist.style.background = "#ffffff";
    song.style.background = "#ffffff";
  };

  song.onclick = function () {
    song.style.background = "#E6E6FA";
    topic.style.background = "#ffffff";
    cate.style.background = "#ffffff";
    home.style.background = "#ffffff";
    album.style.background = "#ffffff";
    playlist.style.background = "#ffffff";
    adver.style.background = "#ffffff";
  };


</script>
</html>

