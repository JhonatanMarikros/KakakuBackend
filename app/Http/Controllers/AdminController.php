<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $title = 'Admins';
        return view('admin.admins.index', compact('admins', 'title'));
    }

    public function create()
    {
        $title = 'Create';
        return view('admin.admins.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
        ], [
            'password.min' => 'Password minimal harus 8 karakter atau angka.',
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }

    public function show(Admin $admin)
    {
        $title = 'Information Admins';
        return view('admin.admins.show', compact('admin', 'title'));
    }

    public function edit(Admin $admin)
    {
        if ($admin->email === 'admin123@gmail.com') {
            return redirect()->route('admins.index')->with('error', 'This admin cannot be edited.');
        }

        $title = 'Edit Admins';
        return view('admin.admins.edit', compact('admin', 'title'));
    }

    public function update(Request $request, Admin $admin)
    {
        if ($admin->email === 'admin123@gmail.com') {
            return redirect()->route('admins.index')->with('error', 'This admin cannot be updated.');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
        ]);

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $admin->password,
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        if ($admin->email === 'admin123@gmail.com') {
            return redirect()->route('admins.index')->with('error', 'This admin cannot be deleted.');
        }

        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
