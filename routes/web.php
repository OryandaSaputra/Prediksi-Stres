<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersHomeController;
use App\Http\Controllers\DaftarUserController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::resource('pasien', App\Http\Controllers\PasienController::class);
    Route::resource('poli', App\Http\Controllers\PoliController::class);
    Route::resource('daftar', App\Http\Controllers\DaftarController::class);
    
    // Route untuk users/home
    Route::get('/users/home', [UsersHomeController::class, 'index'])->name('users.home');
    Route::resource('users', DaftarUserController::class);


    Route::resource('articles', ArticleController::class);

    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles_create');



});
