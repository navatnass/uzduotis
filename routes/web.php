<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;

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

// Route::resource('trucks', TruckController::class);

Route::get('/', function () {
    return view('trucks.index');
});

Route::get('/', [TruckController::class, 'index'])->name('home');
Route::get('/create', [TruckController::class, 'create'])->name('create');
Route::post('/truck/{id}', [TruckController::class, 'show'])->name('show');
Route::get('/store', [TruckController::class, 'store'])->name('store');
Route::get('/{id}/edit', [TruckController::class, 'edit'])->name('edit');
Route::post('/truck/{id}/update', [TruckController::class, 'update'])->name('update');
Route::get('/truck', [TruckController::class, 'delete'])->name('delete');