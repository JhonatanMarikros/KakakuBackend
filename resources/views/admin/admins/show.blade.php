@extends('admin.layouts.main')
@section('container')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Admin Details</h2>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-2"><strong>ID:</strong></div>
                <div class="col-sm-10">{{ $admin->id }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2"><strong>Name:</strong></div>
                <div class="col-sm-10">{{ $admin->name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2"><strong>Email:</strong></div>
                <div class="col-sm-10">{{ $admin->email }}</div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('admins.index') }}" class="btn btn-primary">Back to Admin List</a>
        </div>
    </div>
</div>
@endsection
