<?php

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

Route::view('/', 'home');

Route::prefix('wish')->group(function () {

    Route::view('/show', 'wish.show');

    Route::view('/create', 'wish.create')->middleware('auth');
    Route::post('/create/store', 'WishController@store');

    Route::view('/edit/{wish}', 'wish.edit')->middleware('auth');
    Route::post('/edit/{wish}/update', 'WishController@update');

    Route::delete('/delete/{wish}', 'WishController@delete');

});

Route::get('/admin', 'AdminController@admin')->middleware('is_admin');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

