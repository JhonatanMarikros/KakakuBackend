<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        $title = 'Admin Login';
        return view('main.admin.login', compact('title'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            if ($user->is_admin) {
                return redirect()->route('admin.home');
            } else {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error', 'Unauthorized access.');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Incorrect email or password');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
