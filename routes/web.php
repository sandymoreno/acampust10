<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index'])->name('clients.index');
Route::get('/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
Route::post('/create', [ClientController::class, 'store'])->name('clients.store');
Route::get('create', function () {
    return view('clients.form');
})->name('clients.create');

