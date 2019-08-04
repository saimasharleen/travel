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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/tours', function () {
    return view('tours');
});
Route::get('/signin','userinfoController@login')->name('login');

Route::get('/superadmin/index', function () {
    return view('superadmin.index');
});
Route::get('/superadmin/pages/signup','superadminController@signup')->name('signup');
Route::post('/superadmin/pages/signup','superadminController@store');