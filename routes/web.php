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
})->name("home");

Route::get('/characters', function () {
    return view('Characters Page');
})->name("characters");



/* Comics route */
Route::get('/comics', function () {
    $comics = config("comics.data");
    // ddd($comics);
return view('comics.index', $comics );
})->name("comics");

/* comic singolo*/
Route::get("comics/{id}", function($id) {
    $comics = config("comics.data");
    //ddd($comics[$id]);

    $comic = $comics[$id];
    return view("comics.show", compact("comic"));
})->name("comic");

/********/


Route::get('/movies', function () {
    return view('Movies Page');
})->name("movies");

Route::get('/tv', function () {
    return view('TV Page');
})->name("tv");

Route::get('/games', function () {
    return view('Games Page');
})->name("games");

Route::get('/collectibles', function () {
    return view('Collectibles Page');
})->name("collectibles");

Route::get('/videos', function () {
    return view('Videos Page');
})->name("videos");

Route::get('/fans', function () {
    return view('Fans Page');
})->name("fans");

Route::get('/news', function () {
    return view('News Page');
})->name("news");

Route::get('/shop', function () {
    return view('Shop Page');
})->name("shop");
