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
Route::get('/choice', function () {
    return view('choice');

});
Route::get('/upload', function () {
    return view('upload');
});
Route::post('/choice', function () {
    request()->file('top')->store('tops');
});
Route::post('/choice', function () {
    request()->file('bottom')->store('bottoms');
});
Route::post('/choice', function () {
    request()->file('dress')->store('dresses');
});
Route::post('/choice', function () {
    request()->file('accessory')->store('accessories');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
