<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/86cbdb02af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <title>Login Form</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-3"><i class="fas fa-sign-in-alt"></i> Login</h1>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}">
                            @error('username')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-input">Password</label>
                            <input type="password" id="password-input" name="password" class="form-control" value="{{ old('password') }}">
                            @error('password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" id="remember-input" name="remember" class="form-check-input" value="1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember-input">Remember me</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
