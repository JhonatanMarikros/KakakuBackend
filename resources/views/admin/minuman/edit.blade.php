@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>Edit Minuman</h1>
    <form action="{{ route('adminminuman.update', $minuman) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $minuman->nama }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ $minuman->harga }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $minuman->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            <img src="{{ Storage::url($minuman->gambar) }}" alt="{{ $minuman->nama }}" width="100">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select name="kategori" id="kategori" class="form-control" required>
                @foreach ($categories as $category)
                <option value="{{ $category }}" @if($minuman->kategori == $category) selected @endif>{{ $category }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection