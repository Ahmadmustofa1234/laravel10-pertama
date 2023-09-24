<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ \App\Http\Controllers\Biodata::class,'index']);
Route::get('/kampus', [\App\Http\Controllers\Biodata::class, 'kampus'])->name('kampus');
Route::get('/Profil', [\App\Http\Controllers\Biodata::class, 'Profil'])->name('Profil');
