<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5">
        <img src="{{ asset('image/Flower2.png') }}" class="img-fluid position-absolute" style="top: -80px; right: 330px;">
        <img src="{{ asset('image/Flower2.png') }}" class="img-fluid position-absolute" style="top: -80px; right: 800px; transform: scaleX(-1);">
        <div class="login-container col-md-6">
            <img src="{{ asset('image/Logo2.png') }}" class="img-fluid mx-auto d-block mb-3"
                style="max-width: 100px; height: auto;" alt="Logo">
            <h2 class="login-heading text-center mb-4">{{ $title }}</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"value="{{ old('email') }}"
                        required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-block mt-4">Login</button>
            </form>
        </div>
        <img src="{{ asset('image/Flower3.png') }}" class="img-fluid position-absolute" style="top: -50px; right: -389px; width: 700px; ">
        <img src="{{ asset('image/Flower3.png') }}" class="img-fluid position-absolute" style="top: -50px; right: 1225px; width: 700px; transform: scaleX(-1);">
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
