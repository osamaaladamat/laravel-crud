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

//Public Pages
// Route::get('/', 'UserController@index');
// Route::get('/show/{id}', 'UserController@show');
// Route::get('/register', 'UserController@create');
// Route::post('/insert', 'UserController@store');

// //Admin dashboard Pages
// Route::get('/admin', 'DashboardController@index');
// Route::get('/edit/{id}', 'DashboardController@edit');
// Route::post('/update/{id}', 'DashboardController@update');
// Route::get('/delete/{id}', 'DashboardController@destroy');

Route::get('/', function () {
    return redirect('/users');
});
Route::get('/admin', function () {
    return redirect('/admin');
});
Route::resource('users', 'UserController');
Route::resource('admin', 'dashboardController');
