<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/mahasiswa', MahasiswaController::class);

Route::get('/mahasiswa/nilai/{mahasiswa}', [NilaiController::class, 'index']);
