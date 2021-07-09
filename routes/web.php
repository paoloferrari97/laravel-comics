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
    $menu = config('comics.menu');
    $data = [
        'comics' => $comics,
        'menu' => $menu
    ];

    return view('comics', $data);
})->name('Comics');

Route::get('/characters', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('characters', $data);
})->name('Characters');

Route::get('/movies', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('movies', $data);
})->name('Movies');

Route::get('/tv', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('tv', $data);
})->name('Tv');

Route::get('/games', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('games', $data);
})->name('Games');

Route::get('/collectibles', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('collectibles', $data);
})->name('Collectibles');

Route::get('/videos', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('videos', $data);
})->name('Videos');

Route::get('/fans', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('fans', $data);
})->name('Fans');

Route::get('/news', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('news', $data);
})->name('News');

Route::get('/shop', function () {
    $menu = config('comics.menu');
    $data = [
        'menu' => $menu
    ];

    return view('shop', $data);
})->name('Shop');