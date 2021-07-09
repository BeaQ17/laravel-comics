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
    return view('home');
});

Route::get('/characters', function () {
    return view('Characters Page');
});



/* Comics route */
Route::get('/comics', function () {
    $comics = config("comics.data");
    // ddd($comics);
    return view('comics', $comics);
});



Route::get('/movies', function () {
    return view('Movies Page');
});

Route::get('/tv', function () {
    return view('TV Page');
});

Route::get('/games', function () {
    return view('Games Page');
});

Route::get('/news', function () {
    return view('News Page');
});

Route::get('/shop', function () {
    return view('Shop Page');
});
