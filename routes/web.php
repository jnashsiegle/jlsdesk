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

Route::get('/', 		'PagesController@home');  //home.blade.php
Route::get('colophon', 	'PagesController@colophon'); //colophon.blade.php
Route::get('about', 	'PagesController@about'); //about.blade.php into home.blade.php
Route::get('resume', 	'PagesController@resume'); //resume.blade.php into home.blade.php
Route::get('skills', 	'PagesController@skills'); //skills.blade.php into home.blade.php
Route::get('contact', 	'PagesController@contact');  //contact.blade.php into home.blade.php


/// Contact Form
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@store']);
