<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="resources/views/auth/login.css"
          integrity="sha512-M6+aTah1IfvC9XzfqPbY/FKjMkqlbSSsQe0mKJjKmLl88/8fO1XKjGZ/2QZq3PGr6zNkNp1y6EhN10W8zsJgw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }

        input[type="text"],
        input[type="password"] {
            display: inline-block;
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        p {
            color: red;
            margin-top: 5px;
        }

        .error-message {
            display: inline-block;
            margin-left: 5px;
        }

        .error-icon {
            color: red;
            margin-right: 5px;
        }

        /* Style the submit button */
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0069d9;
        }

        /* Use Font Awesome icon for submit button */
        .fa-sign-in-alt {
            margin-right: 5px;
        }

        /* Center form on the page */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        /* Center login button */
        div {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Login</h1>
<form action="{{route('login')}}" method="POST">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{old('username')}}">
        @error('username')
        <p class="error-message"><i class="fas fa-exclamation-triangle error-icon"></i>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="password-input">Password</label>
        <input type="password" id="password-input" name="password" value="{{old('password')}}">
        @error('password')
        <p class="error-message"><i class="fas fa-exclamation-triangle error-icon"></i>{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i> Login</button>
    </div>
</form>

</body>
</html>
