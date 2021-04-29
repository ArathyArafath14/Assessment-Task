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

Route::get('/',[App\Http\Controllers\PublicController::class, 'index'])->name('welcome');
Route::get('food-menu',[App\Http\Controllers\PublicController::class, 'menu']);
Route::get('menu-category/{id}',[App\Http\Controllers\PublicController::class, 'menuList']);
Route::get('all-menu',[App\Http\Controllers\PublicController::class, 'allMenu']);
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace' => 'App\Http\Controllers'], function() {

Route::resource('menu', 'MenuController');
Route::resource('category', 'CategoryController');
});