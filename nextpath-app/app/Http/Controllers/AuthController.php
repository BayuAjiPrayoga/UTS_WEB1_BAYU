<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = auth()->user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            if ($user->role == 'user') {
                return redirect()->route('siswa.dashboard');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'email atau password salah'
        ]);
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('welcome');
    }
}
