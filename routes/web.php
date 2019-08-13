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

Route::get('/about','homeController@about')->name('about');

Route::get('/blog', 'homeController@blog')->name('blog');
Route::get('/contacts', 'homeController@contacts')->name('contacts');
Route::get('/gallery','homeController@gallery')->name('gallery');
Route::get('/tours', 'homeController@tours')->name('tours');

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

Route::get('/b2b/index', 'b2bController@index')->name('b2b.index');

Route::get('/hotelagent/index', 'hotelagentController@index')->name('hotelagent.index');