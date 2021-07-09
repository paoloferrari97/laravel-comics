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
    $comics = config('comics.data');
    $data = [
        'comics' => $comics
    ];

    return view('comics', $data);
})->name('Comics');

Route::get('/characters', function () {

    return view('characters');
})->name('Characters');

Route::get('/movies', function () {

    return view('movies');
})->name('Movies');

Route::get('/tv', function () {

    return view('tv');
})->name('Tv');

Route::get('/games', function () {

    return view('games');
})->name('Games');

Route::get('/collectibles', function () {

    return view('collectibles');
})->name('Collectibles');

Route::get('/videos', function () {

    return view('videos');
})->name('Videos');

Route::get('/fans', function () {

    return view('fans');
})->name('Fans');

Route::get('/news', function () {

    return view('news');
})->name('News');

Route::get('/shop', function () {

    return view('shop');
})->name('Shop');