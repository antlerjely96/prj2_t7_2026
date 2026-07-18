<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route hien thi danh sach category
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('categories.index');
//Route hien thi form them category
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])
    ->name('categories.create');
//Route them du lieu len db
Route::post('/categories/create', [\App\Http\Controllers\CategoryController::class, 'store'])
    ->name('categories.store');
//Route hien thi form sua
Route::get('categories/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])
    ->name('categories.edit');
//Route chinh sua du lieu tren db
Route::put('categories/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'update'])
    ->name('categories.update');
//Route xoa du lieu tren db
Route::delete('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])
    ->name('categories.destroy');
