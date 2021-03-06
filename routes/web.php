<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', 'App\Http\Controllers\PostController@index');



Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit');


Route::PUT('/posts/{post}', 'App\Http\Controllers\PostController@update');


Route::get('/posts/create', 'App\Http\Controllers\PostController@create');

Route::post('/posts', 'App\Http\Controllers\PostController@store');

Route::get('/posts/{post}/show', 'App\Http\Controllers\PostController@show');

Route::get('/posts/{post}','App\Http\Controllers\PostController@destroy');





Route::post('/posts/{post}/store','App\Http\Controllers\CommentController@store');









Route::get('register','App\Http\Controllers\RegistrationController@create');
Route::post('register','App\Http\Controllers\RegistrationController@store');


Route::get('login','App\Http\Controllers\SessionsController@create');
Route::post('login','App\Http\Controllers\SessionsController@store');

Route::get('logout','App\Http\Controllers\SessionsController@destroy');
