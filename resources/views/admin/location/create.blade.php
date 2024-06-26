@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ route('adminlocations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="open">Open Time</label>
            <input type="time" name="open" class="form-control">
        </div>
        <div class="form-group">
            <label for="close">Close Time</label>
            <input type="time" name="close" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
