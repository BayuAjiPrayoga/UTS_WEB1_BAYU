<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Pendaftaran
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::post('/admin/update-status/{id}', [DashboardController::class, 'UpdateStatus'])->name('admin.update-status')->middleware(['auth', 'role:admin']);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard/siswa', [DashboardController::class, 'siswa'])->name('siswa.dashboard')->middleware('auth', 'role:user');
});
