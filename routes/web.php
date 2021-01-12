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
Route::get('/edit', 'App\Http\Controllers\UserController@edit');
Route::patch('/update', 'App\Http\Controllers\UserController@update');

// SuperAdmin Routes
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');

// Finance (admin) routes
Route::get('/finance', 'App\Http\Controllers\FinanceController@index')->name('finance.index');
Route::post('/finance/store', 'App\Http\Controllers\FinanceController@store')->name('finance.store');
Route::get('/finance/{id}/edit', 'App\Http\Controllers\FinanceController@edit')->name('finance.edit');
Route::patch('/finance/{id}/update', 'App\Http\Controllers\FinanceController@update')->name('finance.update');

// Library (admin) routes
Route::get('/library', 'App\Http\Controllers\LibraryController@index')->name('library.index');
Route::post('/library/store', 'App\Http\Controllers\LibraryController@store')->name('library.store');
Route::get('/library/{id}/edit', 'App\Http\Controllers\LibraryController@edit')->name('library.edit');
Route::patch('/library/{id}/update', 'App\Http\Controllers\LibraryController@update')->name('library.update');

Auth::routes();
