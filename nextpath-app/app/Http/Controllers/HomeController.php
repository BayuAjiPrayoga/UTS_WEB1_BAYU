<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class HomeController extends Controller
{
    public function index()
    {
        $informasi = Informasi::latest()->get();
        return view('home', compact('informasi'));
    }
}
