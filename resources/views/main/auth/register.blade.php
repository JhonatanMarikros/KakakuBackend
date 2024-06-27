<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5">
        <img src="{{ asset('image/Flower2.png') }}" class="img-fluid position-absolute" style="top: -80px; right: 330px;">
        <img src="{{ asset('image/Flower2.png') }}" class="img-fluid position-absolute" style="top: -80px; right: 800px; transform: scaleX(-1);">
        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="register-container col-md-6">
            <img src="{{ asset('image/Logo2.png') }}" class="img-fluid mx-auto d-block mb-3"
                style="max-width: 100px; height: auto;" alt="Logo">
            <h2 class="register-heading text-center mb-4">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group diff">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    @if ($errors->has('name'))
                        <div class="alert alert-danger mt-2">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group diff">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <div class="alert alert-danger mt-2">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <button class="btn-outline-secondary" type="button" id="togglePassword" onclick="togglePassword('password')">
                                    <i class="ri-eye-fill" id="togglePasswordIcon"></i>
                                </button>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="alert alert-danger mt-2">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                            <div class="input-group-append">
                                <button class="btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                    <i class="ri-eye-fill" id="toggleConfirmPasswordIcon"></i>
                                </button>
                            </div>
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <div class="alert alert-danger mt-2">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-block mt-4">Register</button>
            </form>

            <div class="text-center mt-3">
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </div>
        <img src="{{ asset('image/Flower3.png') }}" class="img-fluid position-absolute" style="top: -50px; right: -389px; width: 700px; ">
        <img src="{{ asset('image/Flower3.png') }}" class="img-fluid position-absolute" style="top: -50px; right: 1225px; width: 700px; transform: scaleX(-1);">
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
