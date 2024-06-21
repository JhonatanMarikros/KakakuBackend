<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coupons Page</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="{{ asset('css/coupon.css') }}">
    <!-- Link CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1>{{ $title }}</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card-columns">
            @foreach ($coupons as $coupon)
                <div class="card mb-4">
                    @if ($coupon->gambar)
                        <img src="{{ asset('images/' . $coupon->gambar) }}" class="card-img-top"
                            alt="{{ $coupon->nama }}">
                    @else
                        <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Default Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $coupon->nama }}</h5>
                        <p class="card-text">{{ $coupon->deskripsi }}</p>
                        <p class="card-text"><strong>Jumlah:</strong> {{ $coupon->jumlah }}</p>
                    </div>
                    <div class="card-footer">
                        @auth
                            @if ($coupon->claimed_by === Auth::id())
                                <p class="text-muted text-center">You have already claimed this coupon.</p>
                            @else
                                <form id="claimForm{{ $coupon->id }}" action="{{ route('coupons.claim', $coupon->id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary claim-btn"
                                        data-coupon="{{ $coupon->nama }}">
                                        Claim Coupon
                                    </button>
                                </form>
                            @endif
                        @else
                            <p class="text-muted text-center">Login to claim this coupon.</p>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>


        <div class="row mt-4">
            <div class="col-12 col-md-6 offset-md-3">
                <a href="/" class="btn btn-secondary btn-block btn-lg">Back to Home</a>
            </div>
        </div>


    </div>

    <!-- Link JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/coupon.js') }}"></script>
</body>

</html>