<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Todo el que quiera ingresasr a la ruta tiene q estar autenticado
y agrega el prefijo 'admin a las url'*/
Route::group(["prefix" => "admin", "middleware" => ['auth']], function () {
    Route::get('home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');

    Route::resource('sliders', SliderController::class);
    Route::resource('categories', CategoryController::class);
});
