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

// 
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('book/create', 'Admin\BookContoller@add');
    Route::post('book/create', 'Admin\BookContoller@create');
    Route::get('book', 'Admin\BookContoller@index');
    Route::get('book/edit', 'Admin\BookController@edit'); 
    Route::post('book/edit', 'Admin\BookController@update');
    Route::get('book/delete', 'Admin\BookController@delete');

    Route::get('book_memo/edit', 'Admin\BookmemoController@edit'); 
    Route::post('book_memo/edit', 'Admin\BookmemoController@update');
    Route::get('book_memo/delete', 'Admin\BookmemoController@delete');

    Route::post('highlight/create', 'Admin\HighlightContoller@create');
    Route::get('highlight', 'Admin\HighlightContoller@index');
    Route::get('highlight/edit', 'Admin\HighlightController@edit'); 
    Route::post('highlight/edit', 'Admin\HighlightController@update');
    Route::get('highlight/delete', 'Admin\HighlightController@delete');

    Route::post('highlight_memo/create', 'Admin\HighlightmemoContoller@create');
    Route::get('highlight_memo/edit', 'Admin\HighlightmemoController@edit'); 
    Route::post('highlight_memo/edit', 'Admin\HighlightmemoController@update');
    Route::get('highlight_memo/delete', 'Admin\HighlightmemoController@delete');

    Route::post('keyword/create', 'Admin\KeywordContoller@create');
    Route::get('keyword/edit', 'Admin\KeywordController@edit'); 
    Route::post('keyword/edit', 'Admin\KeywordController@update');
    Route::get('keyword/delete', 'Admin\KeywordController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'BookController@index');
Route::get('/highlight', 'HighlightController@index');
