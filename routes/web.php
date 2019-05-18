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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/recent-events','FrontController@events')->name('recent-events');
Route::get('/upcoming-events', 'FrontController@upcomingevents')->name('upcoming-events');
Route::get('/courses-offered', 'FrontController@coursesoffered')->name('courses-offered');
Route::get('/faculty-members', 'FrontController@facultymembers')->name('faculty-members');
Route::get('/blog','FrontController@blog')->name('blog');
Route::get('/contact','FrontController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
