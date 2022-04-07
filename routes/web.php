<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('tops.top');
});
Route::get('/search', function () {
    return view('tops.search');
});
Route::get('/search_result', 'SearchController@index')->name('searches.index');
Route::get('/search_show/{id}', 'SearchController@show')->name('searches.show');

Route::resource('/articles', 'ArticleController');