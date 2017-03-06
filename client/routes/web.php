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


Route::get('/readme', function () {
    return view('readme');
});


Route::get('/contact-me', function () {
    return view('contact-me');
});

Route::get('/astroport', function () {
  return view('astroport');
});


Route::get('/minesweeper', function () {
    return view('minesweeper');
});
