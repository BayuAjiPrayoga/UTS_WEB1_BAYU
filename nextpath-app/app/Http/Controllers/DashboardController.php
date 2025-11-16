<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $users = User::where('role', 'user')->get();
        $totalSiswa = User::where('role', 'user')->count();
        $diterima = User::where('role', 'user')->where('status', 'Diterima')->count();
        $ditolak = User::where('role', 'user')->where('status', 'Ditolak')->count();
        $pending = User::where('role', 'user')->where('status', 'Pending')->count();

        return view('dashboard.admin', compact('users', 'totalSiswa', 'diterima', 'ditolak', 'pending'));
    }

    public function siswa()
    {
        $user = Auth::user();
        if ($user->role !== 'user') {
            return redirect()->route('welcome')->with('error', 'Anda tidak memiliki akses!');
        }
        return view('dashboard.siswa', compact('user'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Diterima,Ditolak,Pending'
        ]);

        $user = User::findOrFail($id);
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'Status berhasil diperbarui');
    }
}
