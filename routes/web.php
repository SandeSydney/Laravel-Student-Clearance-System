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
Route::get('/admin/tables', 'App\Http\Controllers\AdminController@tables');

// Finance (admin) routes
Route::get('/finance', 'App\Http\Controllers\FinanceController@index')->name('finance');

// Library (admin) routes
Route::get('/library', 'App\Http\Controllers\LibraryController@index')->name('library');

Auth::routes();
