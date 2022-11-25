<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::redirect('/','/home');
Route::get('/home', [HomeC::class, 'index']);
Route::get('/about', [HomeC::class, 'about']);
Route::get('/barang', [HomeC::class, 'barang']);
Route::get('/konsumen', [HomeC::class, 'konsumen']);