<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
      <a class="navbar-brand">Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-link {{ $title === 'Admin Home' ? 'active' : '' }}" href="{{ route('admin.home') }}">Home</a>
              <a class="nav-link {{ $title === 'Users' ? 'active' : '' }}" href="{{ route('adminuser.index') }}">Users</a>
              <a class="nav-link {{ $title === 'Admin' ? 'active' : '' }}" href="{{ route('admins.index') }}">Admin</a>
              <a class="nav-link {{ $title === 'Makanan' ? 'active' : '' }}" href="{{ route('adminmakanan') }}">Makanan</a>
              <a class="nav-link {{ $title === 'Minuman' ? 'active' : '' }}" href="{{ route('adminminuman') }}">Minuman</a>
              <a class="nav-link" {{ ($title === 'Location') ? 'active' : '' }} href="/adminlocations">Location</a>
              <a class="nav-link {{ $title === 'Coupon' ? 'active' : '' }}" href="{{ route('admincoupon') }}">Coupon</a>
          </div>
          <div class="navbar-nav">
              @auth('admin')
                  <span class="nav-link">Hello, {{ Auth::guard('admin')->user()->name }}</span>
              @endauth
              <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-primary">
                      <i class="ri-logout-box-r-line"></i> Logout
                  </button>
              </form>
          </div>
      </div>
  </div>
</nav>
