@extends('admin.layouts.main')

@section('container')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('adminmakanan.create') }}" class="btn btn-primary">Tambah Makanan</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($makanans as $makanan)
                <tr>
                    <td>{{ $makanan->id }}</td>
                    <td>{{ $makanan->nama }}</td>
                    <td>{{ $makanan->harga }}</td>
                    <td>{{ $makanan->deskripsi }}</td>
                    <td><img src="{{ asset('storage/' . $makanan->gambar) }}" alt="{{ $makanan->nama }}" style="width: 100px;"></td>
                    <td>{{ $makanan->kategori }}</td>
                    <td>
                        <a href="{{ route('adminmakanan.edit', $makanan->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('adminmakanan.show', $makanan->id) }}" class="btn btn-info">Detail</a>
                        <form action="{{ route('adminmakanan.destroy', $makanan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
