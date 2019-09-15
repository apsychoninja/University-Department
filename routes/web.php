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

Route::get('locale/{locale}','FrontController@locale')->name('locale');
Route::get('/logout', 'Auth\LoginController@logout')->name('logoutt');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::prefix('admin')->group(function(){
Route::group(['prefix'=>'admin','middleware'=>['auth:admin']],function(){

	Route::get('delete/{id}','AdminFrontController@destroy')->name('admin.destroy');
	Route::PATCH('edit/{id}','AdminFrontController@update');
	/*Front End Pages*/
	
	/*Profile Page*/
	Route::get('profile','AdminFrontController@profile')->name('admin.profile');	
	Route::Post('profile','AdminFrontController@update_avatar')->name('admin.update_avatar');

	/*Faculty Members*/
	Route::get('faculty','AdminFrontController@faculty')->name('admin.faculty');
	Route::post('faculty','AdminFrontController@faculty_store')->name('admin.faculty_store');
	Route::get('faculty/delete/{id}','AdminFrontController@faculty_destroy')->name('admin.faculty_destroy');

	/*Softwares*/
	Route::resource('software','SoftwareController');
	Route::get('software/delete/{id}','SoftwareController@destroy')->name('software_destroy');
	/*Administrators Table*/

	Route::post('all-admins','AdminFrontController@store')->name('admins.post');
	Route::get('all-admins','AdminFrontController@all_admins')->name('admins.list');

	/*Show Single Admin profile*/
	//Route::get('all-admins/{id}','AdminFrontController@show')->name('admins.single');

	/*Edit Single Admin profile */
	Route::PATCH('all-admins/{id}','AdminFrontController@update')->name('admins.update');

	Route::get('all-admins/{id}/edit','AdminFrontController@edit')->name('admins.edit');

});

	Route::prefix('admin')->group(function(){

		//Admin Login Pages
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	 
	//Password Reset Routes
	 Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	 Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	 Route::post('/password/reset','Auth\AdminResetPasswordController@reset')->name('admin.password.update');
	 Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});
