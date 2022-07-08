<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/providers', [App\Http\Controllers\ProviderController::class, 'index'])->name('provider')->middleware('auth');
Route::get('/providers/create', [App\Http\Controllers\ProviderController::class, 'create'])->name('provider')->middleware('auth');
Route::post('/providers/store', [App\Http\Controllers\ProviderController::class, 'store'])->name('provider')->middleware('auth');
Route::get('/providers/edit/{id}', [App\Http\Controllers\ProviderController::class, 'edit'])->name('provider')->middleware('auth');
Route::post('/providers/update/{id}', [App\Http\Controllers\ProviderController::class, 'update'])->name('provider')->middleware('auth');
Route::get('/providers/destroy/{id}', [App\Http\Controllers\ProviderController::class, 'destroy'])->name('provider')->middleware('auth');

Route::get('/paket', [App\Http\Controllers\PaketController::class, 'index'])->name('paket')->middleware('auth');
Route::get('/paket/create', [App\Http\Controllers\PaketController::class, 'create'])->name('paket')->middleware('auth');
Route::post('/paket/store', [App\Http\Controllers\PaketController::class, 'store'])->name('paket')->middleware('auth');
Route::get('/paket/edit/{id}', [App\Http\Controllers\PaketController::class, 'edit'])->name('paket')->middleware('auth');
Route::post('/paket/update/{id}', [App\Http\Controllers\PaketController::class, 'update'])->name('paket')->middleware('auth');
Route::get('/paket/destroy/{id}', [App\Http\Controllers\PaketController::class, 'destroy'])->name('paket')->middleware('auth');
