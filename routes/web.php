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

Route::get('/about', function () {

    return view('about',[

        'articles' => App\Article::take(3)->latest()->get()

    ]);
});

Route::get('/articles', function () {

    return view('articles.index',[

        'articles' => App\Article::latest()->get()

    ]);
});
Route::get('/articles', 'ArticlesController@index')->name('articles.index');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::get('/articles/{article}/update', 'ArticlesController@update');

Auth::routes();

