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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() 
// {
//     return '<h1>Hello, world!</h1>';
// });

Route::get('/', function() 
{
    $res = 2 + 5 - 2;
    $name = 'John';
    return view('home', compact('res', 'name'));
    // return view('home', ['var' => $res, 'name' => $name]);
});

Route::get('/about', function() 
{
   return '<h1>About Page.</h1>';
});