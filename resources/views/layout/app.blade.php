<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySqlEdu - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset(mix('/css/app.css'))}}" />
    <script src="{{ asset(mix('/js/app.js'))}}" defer></script>
    <style>
        body {
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    {{-- Navigation --}}
    <nav class="navbar navbar-expand-lg bg-light mb-4 shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MySqlEdu @yield('title')</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home.index')}}" role="button">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('message.create')}}" role="button">Message</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home.about')}}" role="button">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('index-tutorial')}}">Show Tutorials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('create-tutorial')}}">Create Tutorial</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('register')}}" role="button">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('login')}}" role="button">Login</a>
              </li>
         
            @auth()
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('logout')}} onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">Logout</a>
              <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none">@csrf</form>
          </li>
        </ul>
          @endauth
          </div>
        </div>
      </nav>
    {{-- <div class="container-sm"> --}}
        {{-- @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif --}}
    @yield('content')

    {{-- </div> --}}
    {{-- Footer Content --}}
    <div class="container border-bottom border-top">
        {{-- @yield('footer') --}}
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="#">Message</a>
                </li>
            </ul>
            <p class="text-center text-muted">MySqlEdu</p>
        </footer>
    </div>
</body>
</html>