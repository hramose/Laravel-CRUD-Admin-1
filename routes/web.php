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


//Frontend
Route::get('/','frontend\PostController@showAll');
Route::get('post/{id}', 'frontend\PostController@showDetail');

//Admin CP
Route::get('admin', function () {
	return redirect('login');});

// Auth
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
Route::get('/changepassword','HomeController@showChangePasswordForm');
Route::post('/changepassword','HomeController@changePassword')->name('changePassword');

// Route Posts Admin
Route::middleware('auth')->group(function () {
	Route::get('admin/post', 'Admin\AdminController@showList');
	//Route::get('admin/post/{id}','Admin\AdminController@showDetail');
	Route::get('admin/post/create', 'Admin\AdminController@showCreateForm');
	Route::post('admin/post/create', 'Admin\AdminController@create');
	Route::get('admin/post/edit/{id}', 'Admin\AdminController@showEditForm');
	Route::post('admin/post/edit/{id}', 'Admin\AdminController@edit');
	Route::get('admin/post/delete/{id}', 'Admin\AdminController@delete');
});

// Route Users Admin
Route::middleware('auth')->group(function () {
	Route::get('admin/account', 'Admin\AccountController@showList');
	//Route::get('admin/account/{id}','Admin\AccountController@showDetail');
	Route::get('admin/account/create', 'Admin\AccountController@showCreateForm');
	Route::post('admin/account/create', 'Admin\AccountController@store');
	Route::get('admin/account/edit/{id}', 'Admin\AccountController@showEditForm');
	Route::post('admin/account/edit/{id}', 'Admin\AccountController@edit');
	Route::get('admin/account/delete/{id}', 'Admin\AccountController@delete');
});