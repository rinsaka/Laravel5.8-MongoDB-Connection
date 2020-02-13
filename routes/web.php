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

Route::get('/comments', 'CommentsController@index');
Route::get('/comments/{_id}', 'CommentsController@show');
Route::get('/comments/{_id}/edit', 'CommentsController@edit');
Route::post('/comments', 'CommentsController@store');
Route::patch('/comments', 'CommentsController@update')->name('comment_update');
Route::delete('/comments/{id}', 'CommentsController@destroy');
