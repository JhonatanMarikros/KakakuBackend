@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>Tambah Makanan</h1>
    <form action="{{ route('adminmakanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select name="kategori" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category }}">{{ $category }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection