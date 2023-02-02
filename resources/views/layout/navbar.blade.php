<nav class="navbar navbar-expand-lg mb-4 shadow" style="background-color: #A7727D">
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
            <a class="nav-link text-light" href="{{ route('home.index')}}" role="button">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('message.create')}}" role="button">Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('home.about')}}" role="button">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('tutorial.index')}}">Show Tutorials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('tutorial.create')}}">Create Tutorial</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light"  href="{{ route('register')}}" role="button">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light"  href="{{ route('login')}}" role="button">Login</a>
          </li>
        @auth()
        <li class="nav-item">
          <a class="nav-link text-light"  href="{{ route('logout')}} onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">Logout</a>
          <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none">@csrf</form>
      </li>
    </ul>
      @endauth
      </div>
    </div>
  </nav>
