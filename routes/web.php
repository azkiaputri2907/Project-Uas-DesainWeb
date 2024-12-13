<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AuthController;

// Route untuk halaman registrasi
Route::get('/register', function () {
    return view('register'); // Pastikan view 'register' ada di folder resources/views
})->name('register');

// Route untuk menyimpan data registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Route untuk halaman login
Route::get('/login', function () {
    return view('login'); // Pastikan view 'login' ada di folder resources/views
})->name('login');

// Route untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route untuk halaman home, dilindungi oleh middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home'); // Pastikan view 'home' ada di folder resources/views
    })->name('home');

    // Rute untuk logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route untuk root agar mengarah ke halaman registrasi
Route::get('/', function () {
    return redirect()->route('register'); // Redirect ke halaman registrasi
});

Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

Route::get('/home', function () {
    return view('home'); // Ganti 'home' dengan nama view untuk halaman home Anda
})->name('home');


use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Arahkan ke halaman login setelah log out
})->name('logout');

