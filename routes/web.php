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
Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('book','App\Http\Controllers\BookingsController');
Route::resource('services','App\Http\Controllers\ServiceController');
Route::resource('products','App\Http\Controllers\ProductsController');

