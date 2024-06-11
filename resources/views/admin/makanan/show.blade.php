@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <h2>{{ $makanan->nama }}</h2>
            <p>Harga: {{ $makanan->harga }}</p>
            <p>Deskripsi: {{ $makanan->deskripsi }}</p>
            <p>Kategori: {{ $makanan->kategori }}</p>
            <img src="{{ asset('storage/images/' . $makanan->gambar) }}" alt="{{ $makanan->nama }}" width="300">
        </div>
    </div>
</div>
@endsection