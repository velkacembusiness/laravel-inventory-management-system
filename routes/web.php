<?php

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
});

Auth::routes();
Route::middleware(['auth'])->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/suppliers', App\Http\Controllers\SupplierController::class,['names' => 'supplier']);
    Route::resource('/customers', App\Http\Controllers\CustomerController::class,['names' => 'customer']);
    Route::resource('/category', App\Http\Controllers\CategoryController::class,['names' => 'category']);
    Route::resource('/product', App\Http\Controllers\ProductController::class,['names' => 'product']);
    Route::resource('/unit', App\Http\Controllers\UnitController::class,['names' => 'unit']);
});

//Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('home.test');
