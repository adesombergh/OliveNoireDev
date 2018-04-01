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
    return view('news');
})->name('news');

Route::get('/artists', function () {
    return view('artists');
})->name('artists');

Route::get('/artist', function () {
    return view('artist');
})->name('artist');

Route::get('/more', function () {
    return view('more');
})->name('more');

Route::get('/releases', function () {
    return view('releases');
})->name('releases');

Route::get('/release', function () {
    return view('release');
})->name('release');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
