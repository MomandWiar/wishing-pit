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

Route::get('/', function () {
    return view('home');
});

Route::prefix('wishlist')->group(function ()
{
    Route::get('/', 'WishController@show');

    Route::get('/createWish', function () {
        return view('wishes.createWish');
    });

    Route::get('/wish-edit/{id}', 'WishController@read');
    Route::get('/wish-delete/{id}', 'WishController@delete');

    Route::post('/createWish/create', 'WishController@create');
    Route::post('/wish-edit/{id}/update', 'WishController@update');
});

