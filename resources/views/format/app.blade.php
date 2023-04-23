<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            background-image: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMGU0Yzc5NWJiYjZjMGFmOWFmNDI5NWFhZWVkNzJiNTFiMjcxM2FlMCZlcD12MV9pbnRlcm5hbF9naWZzX2dpZklkJmN0PWc/l3vRnoppYtfEbemBO/giphy.gif');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }
        header {
            text-align: right;
            padding: 10px;
            background-color: #1E90FF;
        }
        header a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            padding: 5px;
        }
        header a:hover {
            background-color: white;
            color: #1E90FF;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
        }
        div {
            margin: 50px auto;
            max-width: 800px;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            font-size: 40px;
            text-align: center;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 25px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        button {
            background-color: #1E90FF;
            color: white;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: white;
            color: #1E90FF;
            border: 2px solid #1E90FF;
            transition: 0.3s ease-in-out;
        }
    </style>
</head>
<body>
<header>
    @guest
        <a href="{{route('login')}}">Login</a>
    @else
        <a href="{{route('logout')}}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout({{auth()->user()->name}})</a>
        <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none">
            @csrf
        </form>
    @endguest
</header>
<div>
    <h1>@yield('title')</h1>
    @yield('content')
</div>
</body>
</html>
