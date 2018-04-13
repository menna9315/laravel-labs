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
    return view('welcome'); //byro7 ll view file elli asmo welcome
});

Route::get(
    'posts',
    'Posts@index'
)->name('posts.index');

//Route::get('posts','Posts@index' ,function () { //ro7 ll posts fe el controller w access index method
   // return 'hello post'; //byro7 lpage maktob feha helllo post

//});

Route::get('posts/create','Posts@create');

Route::post('posts','Posts@store');
Route::delete('posts/{post}','Posts@destroy');
Route::get('/posts/{post}/edit','Posts@edit');
Route::post('/posts/{post}/update','Posts@update');


