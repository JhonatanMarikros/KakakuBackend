@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>Daftar Minuman</h1>
    <a href="{{ route('adminminuman.create') }}" class="btn btn-primary">Tambah Minuman</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($minumans as $minuman)
            <tr>
                <td>{{ $minuman->nama }}</td>
                <td>{{ $minuman->harga }}</td>
                <td>{{ $minuman->deskripsi }}</td>
                <td><img src="{{ Storage::url($minuman->gambar) }}" alt="{{ $minuman->nama }}" width="100"></td>
                <td>{{ $minuman->kategori }}</td>
                <td>
                    <a href="{{ route('adminminuman.show', $minuman->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('adminminuman.edit', $minuman->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('adminminuman.destroy', $minuman->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection