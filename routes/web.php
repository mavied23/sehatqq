<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User; 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserController::class);
Auth::routes();

Route::get('/user', function () {
    $users = App\Models\User::all(); // Ambil semua data user
    
    return view('users.index', compact('users')); // Kirim data ke view
})->name('user'); // Beri nama ke route
Route::get('/users', [UserController::class, 'index'])->name('users.index');

