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

// Default user Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clearance-form', 'App\Http\Controllers\UserController@clearanceForm');
Route::get('/user-profile', 'App\Http\Controllers\UserController@userProfile');
Route::post('/imageUpload', 'App\Http\Controllers\UserController@imageUpload');

// SuperAdmin Routes
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');

// Finance (admin) routes
Route::get('/finance', 'App\Http\Controllers\FinanceController@index')->name('finance');
Route::post('/finance/store', 'App\Http\Controllers\FinanceController@store');
Route::get('/finance/{id}/edit', 'App\Http\Controllers\FinanceController@edit');

// Library (admin) routes
Route::get('/library', 'App\Http\Controllers\LibraryController@index')->name('library');
Route::post('/library/store', 'App\Http\Controllers\LibraryController@store');
Route::get('/library/{id}/edit', 'App\Http\Controllers\LibraryController@edit');

Auth::routes();
