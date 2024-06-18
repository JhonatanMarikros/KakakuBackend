@extends('admin.layouts.main')
@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-primary">Show Coupon</h2>
                <a class="btn btn-primary" href="{{ route('admincoupon.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>Nama:</strong>
                        <p class="text-muted">{{ $admincoupon->nama }}</p>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Deskripsi:</strong>
                        <p class="text-muted">{{ $admincoupon->deskripsi }}</p>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Jumlah:</strong>
                        <p class="text-muted">{{ $admincoupon->jumlah }}</p>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Gambar:</strong>
                        <img src="/images/{{ $admincoupon->gambar }}" class="img-fluid rounded" alt="Coupon Image" width="100px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
