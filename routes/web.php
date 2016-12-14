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
    return view('welcome');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/camera', function () {
    return view('camera');
});
Route::get('/outfits', function () {
    request()->file('top')->store('outfits');
    request()->file('bottom')->store('outfits');
    request()->file('dress')->store('outfits');
    request()->file('accessories')->store('outfits');
});
