<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/adminpage.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC&display=swap" rel="stylesheet">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-2 sidebar">
            @auth('admin')
                <span class="nav-link">Hello, {{ Auth::guard('admin')->user()->name }}</span>
            @endauth
            <a class="nav-link" {{ $title === 'Admin Home' ? 'active' : '' }} href="/adminhome">Home</a>
            <a class="nav-link" {{ $title === 'Users' ? 'active' : '' }} href="/adminuser">Users</a>
            <a class="nav-link" {{ $title === 'Admin' ? 'active' : '' }} href="/admins">Admin</a>
            <a class="nav-link" {{ $title === 'Makanan' ? 'active' : '' }} href="/adminmakanan">Makanan</a>
            <a class="nav-link" {{ $title === 'Minuman' ? 'active' : '' }} href="/adminminuman">Minuman</a>
            <a class="nav-link" {{ $title === 'Location' ? 'active' : '' }} href="/adminlocations">Location</a>
            <a class="nav-link" {{ $title === 'Coupon' ? 'active' : '' }} href="/admincoupon">Coupon</a>
            <div class="navbar-nav">
                <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-logout-box-r-line"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
sidebar.blade.php