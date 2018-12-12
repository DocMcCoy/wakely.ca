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
    return view('splash');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/assignments', function () {
    return view('assign');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@makeContact');

Route::get('/card', function () {
    return view('card');
});

Route::get('/goback', 'GoBackController@goBack');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

