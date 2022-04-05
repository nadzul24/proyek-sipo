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





Auth::routes();

Route::get('/', 'HomeController@admin')->name('home');
Route::get('/home', 'HomeController@admin')->name('home');
Route::get('/formBio', 'HomeController@formBio')->name('bio');
Route::get('/formUser', 'HomeController@formUser')->name('user');
Route::post('/addBio', 'HomeController@insertFanpage');
Route::get('/bio', 'HomeController@fanpage')->name('bio');
Route::get('/user', 'HomeController@pengguna')->name('user');
Route::get('/editBio/{id}', 'HomeController@editBio')->name('editBio');
Route::POST('/proBio', 'HomeController@updateBio')->name('upBio');
Route::get('/deleteBio/{id}', 'HomeController@delBio')->name('deleteBio');
Route::get('/deleteUser/{id}', 'HomeController@delUser')->name('deleteUser');