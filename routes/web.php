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

Route::get('/','homeController@index')->name('home');

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

Route::get('/signin', 'loginController@index')->name('login');
Route::post('/signin', 'loginController@verify');

Route::get('/superadmin/index', 'superadminController@index')->name('superadmin.index');
Route::get('/superadmin/pages/signup','superadminController@signup')->name('signup');
Route::post('/superadmin/pages/signup','superadminController@store');

Route::get('/superadmin/pages/mail', 'MailController@home');
Route::post('/superadmin/pages/mail', 'MailController@sendemail');

Route::get('/superadmin/pages/advertisement', 'uploadfileController@advertisement');
Route::post('/superadmin/pages/advertisement', 'uploadfileController@store');

Route::get('/superadmin/pages/notice', 'superadminController@noticeindex')->name('notice');
Route::post('/superadmin/pages/notice', 'superadminController@noticestore');

Route::get('/superadmin/pages/profile', 'superadminController@profile');

Route::get('/superadmin/pages/profile', 'superadminController@profile');
Route::post('/superadmin/pages/profile', 'superadminController@uploadstore');
Route::post('/superadmin/pages/editprofile', 'superadminController@editprofilestore');
Route::get('/superadmin/pages/forgetpassword', 'superadminController@forgetpassword');