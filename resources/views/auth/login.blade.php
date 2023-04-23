<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<h1>Login</h1>
<form action="{{route('login')}}" method="POST">
    @csrf
    <label for="username">Username</label>
    <input type="text" id="username" name="username" value="{{old('username')}}">
    @error('username')
    <p>{{$message}}</p>
    @enderror
    <div>
        <label for="password-input">Password</label>
        <input type="password" id="password-input" name="password" value="{{old('password')}}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="login" class="btn btn-primary">
    </div>
</form>
</html>
