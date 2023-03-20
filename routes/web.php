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

Route::get('/', 'HomeController@index');
Route::get('/test', 'HomeController@test');
Route::get('/test2', 'Test\TestController@index');
Route::get('/pages/{slug}', 'PageController@show');

Route::resource('/posts', 'PostController');

Route::fallback(function () 
    {
        // return redirect()->route('home');
        abort(404, 'Ooops, page not found...');
    });


