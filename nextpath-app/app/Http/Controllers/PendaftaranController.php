<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
    // Middleware auth dihapus untuk sementara

    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|string|max:100',
            'password' => 'required|string|min:6',
            'nilai_rata_rata' => 'nullable|numeric',
            'foto_ijazah' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('foto_ijazah')) {
            $gambarPath = $request->file('foto_ijazah')->store('users/ijazah', 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'status' => 'Pending',
            'foto_ijazah' => $gambarPath
        ]);

        return redirect()->route('welcome')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
