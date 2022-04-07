<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('tops.top');
});
Route::get('/search', function () {
    return view('tops.search');
});
Route::get('/search_result', 'SearchController@index')->name('searches.index');
Route::get('/search_show/{id}', 'SearchController@show')->name('searches.show');

Route::get('/article', 'ArticleController@index')->name('articles.index');