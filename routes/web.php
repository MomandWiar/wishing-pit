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

    Route::group(['middleware' => 'can:view,wish'], function() {

        Route::get('/edit/{wish}', 'WishController@edit');
        Route::post('/edit/{wish}/update', 'WishController@update');

    });

    Route::delete('/delete/{wish}', 'WishController@delete');

});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

