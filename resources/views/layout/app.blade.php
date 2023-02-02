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
            background-color: #F8EAD8;
        }
    </style>
</head>
<body>
    {{-- Navigation --}}
    @include('layout.navbar')
    @yield('content')
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