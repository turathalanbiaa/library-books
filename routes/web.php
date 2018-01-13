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

Auth::routes();

Route::get('/', 'IndexControoller@view')->name('home');
Route::get('/main', 'IndexControoller@main')->name('main');
Route::get('/category/{categoryID}', 'IndexControoller@getBooksByCategory')->name('category');
Route::get('/search', 'IndexControoller@search')->name('search');
Route::get('/parts/{bookName}/{categoryID}', 'IndexControoller@getParts')->name('parts');
