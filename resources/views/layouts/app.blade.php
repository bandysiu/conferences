<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/3c8ee2b899.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-auto m-auto">
            <header style="margin: 10px">
                @guest
                    <a href="{{route('login')}}">Login</a>
                @else
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout({{auth()->user()->name}})</a>
                    <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none">
                        @csrf
                    </form>
                @endguest
            </header>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-auto m-auto">
            @yield('content')
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-auto m-auto">
            @yield('address')
        </div>
    </div>
</div>
</body>
</html>
