<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarSantriController extends Controller
{
    public function store(Request $request)
    {
        return view('daftar-berhasil');
    }
}
