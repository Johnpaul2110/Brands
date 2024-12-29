<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;

Route::resource('brands', App\Http\Controllers\BrandsController::class);

Route::get('/', [App\Http\Controllers\BrandsController::class, 'index'])->name('brands.index');

Route::get('brands/create', [App\Http\Controllers\BrandsController::class, 'create'])->name('brands.create');

Route::post('brands', [App\Http\Controllers\BrandsController::class, 'store'])->name('brands.store');

Route::get('brands/{id}edit', [App\Http\Controllers\BrandsController::class, 'edit'])->name('brands.edit');
Route::put('/brands/{id}update', [App\Http\Controllers\BrandsController::class, 'update'])->name('brands.update');



Route::delete('brands/{brand}', [App\Http\Controllers\BrandsController::class, 'destroy'])->name('brands.destroy');

