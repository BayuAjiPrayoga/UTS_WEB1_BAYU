<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'nilai_rata_rata' => 100,
            'foto_ijazah' => 'ijazah/admin.jpg',
            'status' => 'Diterima',
        ]);

        // User 1
        User::create([
            'name' => 'Bintang Akmal',
            'email' => 'bintang@example.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'nilai_rata_rata' => 85,
            'foto_ijazah' => 'ijazah/bintang.jpg',
            'status' => 'Pending',
        ]);

        // User 2
        User::create([
            'name' => 'Rizal Pratama',
            'email' => 'rizal@example.com',
            'role' => 'user',
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'nilai_rata_rata' => 78,
            'foto_ijazah' => 'ijazah/rizal.jpg',
            'status' => 'Ditolak',
        ]);
    }
}
