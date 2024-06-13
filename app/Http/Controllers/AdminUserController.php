<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{public function index()
    {
        $users = UserAccount::all();
        $title = 'User';
        return view('admin.user.index', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Create User';
        return view('admin.user.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_accounts',
            'password' => 'required|string|min:8',
        ], [
            'password.min' => 'Password minimal harus 8 karakter.',
        ]);

        $user = new UserAccount();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('adminuser.index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        $user = UserAccount::findOrFail($id);
        $title = 'User Details';
        return view('admin.user.show', compact('user', 'title'));
    }

    public function edit($id)
    {
        $user = UserAccount::findOrFail($id);
        $title = 'Edit User';
        return view('admin.user.edit', compact('user', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_accounts,email,'.$id,
            'password' => 'nullable|string|min:8',
        ], [
            'password.min' => 'Password must be at least 8 characters.',
        ]);

        $user = UserAccount::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('adminuser.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = UserAccount::findOrFail($id);
        $user->delete();

        return redirect()->route('adminuser.index')->with('success', 'User deleted successfully.');
    }
}
