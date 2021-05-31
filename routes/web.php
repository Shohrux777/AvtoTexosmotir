<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Turi;
use App\Http\Controllers\clients;
use App\Http\Controllers\planshit;
use App\Http\Controllers\clientList;
use App\Http\Controllers\akt;

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
Route::get('/val', function () {
    return view('valide');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/clients', [clients::class, 'index'])->name('clients');
Route::middleware(['auth:sanctum', 'verified'])->post('add', [clients::class, 'addClient']);
// Route::middleware(['auth:sanctum', 'verified'])->post('deleteClient', [clients::class, 'deleteClient']);
Route::middleware(['auth:sanctum', 'verified'])->get('/planshit', function () {
    return view('planshit');
})->name('planshit');
Route::middleware(['auth:sanctum', 'verified'])->post('add_planshit', [planshit::class, 'addPlanshit']);
Route::middleware(['auth:sanctum', 'verified'])->get('/clientList', [clientList::class,'list'])->name('clientList');
Route::middleware(['auth:sanctum', 'verified'])->get('editClient/{id}', [clientList::class, 'EditClient']);
Route::middleware(['auth:sanctum', 'verified'])->get('planClient/{id}', [clientList::class, 'plan_client']);
Route::middleware(['auth:sanctum', 'verified'])->get('delete/{id}', [clientList::class, 'deleteClient']);
Route::middleware(['auth:sanctum', 'verified'])->get('print/{id}', [clientList::class, 'printClient']);
Route::middleware(['auth:sanctum', 'verified'])->get('showClients/{id}', [clientList::class, 'showClient']);
Route::middleware(['auth:sanctum', 'verified'])->post('edit', [clientList::class, 'updateClint']);

Route::middleware(['auth:sanctum', 'verified'])->get('/planshitList', [clientList::class,'planshit'])->name('planshitList');
Route::middleware(['auth:sanctum', 'verified'])->get('akt', [akt::class,'aktList'])->name('akt');
Route::middleware(['auth:sanctum', 'verified'])->get('aktClient/{id}', [akt::class,'aktView']);
Route::middleware(['auth:sanctum', 'verified'])->get('aktPrint/{id}', [akt::class,'aktWord']);
Route::get('/registration', function () {
    return view('auth.register');
});
