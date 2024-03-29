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

Route::get('/event', function () {
    return view('event');
});

Route::get('/event/inputEvent', function () {
    return view('inputEvent');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/shop', 'getproduct@ajoutproduit');

Route::get('/legalmention', function () {
    return view('legalmention');
});

Route::get('/link1shop', function () {
    return view('link1shop');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/backet', function () {
    return view('backet');
});

Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/inputEvent', function () {
    return view('inputEvent');
});

Route::get('/shopInput', function () {
    return view('shopInput');
});

Route::get('/eventsignin', function () {
    return view('eventsignin');
});

Route::get('/addProduct',"addProduct@saveApiData");

Route::get('/addComment',"addComment@saveApiData");

Route::get('/addUser',"addUser@saveApiData");

Route::get('/addEvent',"addEvent@saveApiData");


Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');

