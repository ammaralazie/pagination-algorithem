<?php

use App\Http\Controllers\Paginate\PostController;
use Illuminate\Support\Facades\Route;

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

Route::group([],function () {
    Route::get('posts/{number_of_paginator?}', 'PostController@index')->name('posts.index');
    Route::get('ascii/', 'PostController@asciicode')->name('posts.ascii');
});
