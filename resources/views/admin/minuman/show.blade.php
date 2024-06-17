@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>{{ $minuman->nama }}</h1>
    <p>Harga: {{ $minuman->harga }}</p>
    <p>Deskripsi: {{ $minuman->deskripsi }}</p>
    <img src="{{ Storage::url($minuman->gambar) }}" alt="{{ $minuman->nama }}" width="300">
    <p>Kategori: {{ $minuman->kategori }}</p>
    <a href="{{ route('adminminuman.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection