<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KonsulController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User; 

Route::get('/', function () {
    return view('awal');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserController::class);
Auth::routes();
Route::get('/user', function () {
    $users = App\Models\User::all(); 
    return view('users.index', compact('users')); 
})->name('user'); 
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/register', [AuthController::class, 'login'])->name('register');
// Route::post('/register', [UserController::class, 'store'])->name('register');
// Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
Route::get('/halaman', function () {
    return view('halaman');
})->name('halaman');
Route::get('/konsul', [KonsulController::class, 'index'])->name('konsul.route');
Route::get('/konsul', function () {
    return view('users.konsul');
});
Route::get('/obat', function () {
    return view('users.obat');
});
Route::get('/info', function (){
    return view('users.info');
});
Route::get('/tentang', function (){
    return view('tentang');
});
Route::get('/konsultasi', function (){
    return view('users.konsultasi');
});
Route::post('/konsultasi', [PasienController::class,'store'])->name('pasien.store');


