<?php

use App\Http\Controllers\GambarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/gambar/simpanGambar', [GambarController::class, 'simpanGambar']);
Route::get('/gambar/tampil', [GambarController::class, 'tampilGambar']);
