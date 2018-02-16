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
    return view('home');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Profile', 'ProfileController@index'); 
// Route::get('/Profile/update', 'ProfileController@index'); 

// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/register', function () {
//     return "<h1>Sridatta</h1>";
// });


// Route::get('/dashboard', function () {
//     return "<h1>Welcome to Dashboard</h1>";
// });


// Route::get('/account', function () {
//     return "<h1>Hi there! Welcome to your account info</h1>";
// });