<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/daftar-santri', function () {
    return view('daftar-santri');
});
use App\Http\Controllers\DaftarSantriController;

Route::post('/daftar-santri', [DaftarSantriController::class, 'store']);



