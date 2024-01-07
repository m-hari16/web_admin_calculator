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

Route::get('/', function() {
    return redirect('/login-petugas');
});

Route::get('login-petugas', 'Web\AuthController@index')->name('login_petugas');
Route::post('login', 'Web\AuthController@login');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/dashboard', 'Web\DashboardController@index');
    Route::post('/logout', 'Web\AuthController@logout');
});