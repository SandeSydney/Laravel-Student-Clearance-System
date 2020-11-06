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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clearance-form', 'App\Http\Controllers\UserController@clearanceForm');
Route::get('/user-profile', 'App\Http\Controllers\UserController@userProfile');
Route::get('/notifications', 'App\Http\Controllers\UserController@notifications');

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/admin/notifications', 'App\Http\Controllers\AdminController@notifications');
Route::get('/admin/user', 'App\Http\Controllers\AdminController@user');
Route::get('/admin/tables', 'App\Http\Controllers\AdminController@tables');

Auth::routes();
