<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/daftar-santri', function () {
    return view('daftar-santri');
});
Route::post('/daftar-santri', function () {
    return view('daftar-berhasil');
});

