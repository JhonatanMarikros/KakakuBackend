@extends('admin.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Coupons</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admincoupon.create') }}"> Create New Coupon</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Jumlah</th>
            <th>Gambar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($coupons as $coupon)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $coupon->nama }}</td>
            <td>{{ $coupon->deskripsi }}</td>
            <td>{{ $coupon->jumlah }}</td>
            <td><img src="/images/{{ $coupon->gambar }}" width="100px"></td>
            <td>
                <form action="{{ route('admincoupon.destroy', $coupon->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('admincoupon.show', $coupon->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admincoupon.edit', $coupon->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $coupons->links() !!}
</div>
@endsection