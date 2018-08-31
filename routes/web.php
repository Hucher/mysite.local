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
    return view('layouts.layout');
});
Route::get('/news' , 'NewsController@index')->name('news.index');
Route::post('/news' , 'NewsController@create')->name('news.create');
Route::get('/news/{news}/show' , 'NewsController@show')->name('news.show');
Route::post('/news/{news}/update' , 'NewsController@update')->name('news.update');
Route::get('/news/{news}/delete' , 'NewsController@delete')->name('news.delete');
Route::get('/news/{news}/more' , 'NewsController@more')->name('news.more');

Route::post('news/{news}/more' , 'CommentsController@store')->name('comment.store');
Route::get('news/{news}/delete/{comment}' , 'CommentsController@delete')->name('comment.delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
