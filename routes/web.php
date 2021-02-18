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
    return view('ctf');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/quest', function () {
    return view('quest');
});


Route::get('/portel', function () {
    return view('q3/flag_3');
});

Route::get('/my_precious', function () {
    return view('q2/my_precious');
});

Route::get('/key', function () {
    return view('q4/key');
});

Route::get('/gogogo', function () {
    return view('q5/go-go-go');
});




Route::get('/q2' , 'MainController@index');
Route::post('/q3/checklogin', 'MainController@checklogin');
Route::get('q3/success', 'MainController@successlogin');
Route::get('q3/logout', 'MainController@logout');
