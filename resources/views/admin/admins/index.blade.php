@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1>Admin Accounts</h1>
    <a href="{{ route('admins.create') }}" class="btn btn-primary">Create Admin</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-info">Show</a>
                        @if($admin->email !== 'admin123@gmail.com')
                            <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
