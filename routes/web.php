<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Turi;

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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/clients', [Turi::class, 'index'])->name('clients');
Route::middleware(['auth:sanctum', 'verified'])->post('/addturi', [Turi::class, 'addturi']);
Route::middleware(['auth:sanctum', 'verified'])->get('/planshit', function () {
    return view('planshit');
})->name('planshit');
Route::middleware(['auth:sanctum', 'verified'])->get('/clientList', function () {
    return view('clientList');
})->name('clientList');
Route::middleware(['auth:sanctum', 'verified'])->get('/planshitList', function () {
    return view('planshitList');
})->name('planshitList');
Route::middleware(['auth:sanctum', 'verified'])->get('/akt', function () {
    return view('akt');
})->name('akt');

Route::get('/registration', function () {
    return view('auth.register');
});
