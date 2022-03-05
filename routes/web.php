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

//\ 
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::get('book/create', 'User\BookController@add');
    Route::post('book/create', 'User\BookController@create');
    Route::get('book', 'User\BookController@index');
    Route::get('book/edit', 'User\BookController@edit'); 
    Route::post('book/edit', 'User\BookController@update');
    Route::get('book/delete', 'User\BookController@delete');

    Route::get('book_memo/edit', 'User\BookmemoController@edit'); 
    Route::post('book_memo/edit', 'User\BookmemoController@update');
    Route::get('book_memo/delete', 'User\BookmemoController@delete');

    Route::post('highlight/create', 'User\HighlightController@create');
    Route::get('highlight', 'User\HighlightController@index');
    Route::get('highlight/edit', 'User\HighlightController@edit'); 
    Route::post('highlight/edit', 'User\HighlightController@update');
    Route::get('highlight/delete', 'User\HighlightController@delete');

    Route::post('highlight_memo/create', 'User\HighlightmemoController@create');
    Route::get('highlight_memo/edit', 'User\HighlightmemoController@edit'); 
    Route::post('highlight_memo/edit', 'User\HighlightmemoController@update');
    Route::get('highlight_memo/delete', 'User\HighlightmemoController@delete');

    Route::post('keyword/create', 'User\KeywordController@create');
    Route::get('keyword/edit', 'User\KeywordController@edit'); 
    Route::post('keyword/edit', 'User\KeywordController@update');
    Route::get('keyword/delete', 'User\KeywordController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'User\BookController@index');
Route::get('/highlight', 'HighlightController@index');
