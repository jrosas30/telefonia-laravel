<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PhoneController;

// Route::get('/', function () {
//     return view('inicio')->name('home2');
// });

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/phones', [PhoneController::class, 'index'])->name('phones.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
