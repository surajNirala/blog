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

/*Route::get('/', function () {
    return view('admin.dashboard');
});*/

Route::resource('posts','PostController');
Route::get('/','PostController@index');

Route::get('aboutus', 'AboutusController@aboutus')->name('aboutus');
Route::get('portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('service', 'ServiceController@service')->name('service');
// Route::get('login', 'LoginController@login')->name('login');

Route::post('store','CommentController@store')->name('comment.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('admin','Admin\LoginController@login')->name('admin.login');

Route::post('admin/logout','Admin\LoginController@logout')->name('admin.logout');

Route::post('admin/logout','Admin\LoginController@logout')->name('admin.logout');

Route::post('admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.reset');

Route::post('admin/password/reset','Admin\ResetPasswordController@reset')->name('admin.password.reset');

Route::get('admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('admin/dashboard','AdminController@index')->name('admin.dashboard');
Route::get('admin/comments','Admin\CommentController@index')->name('admin.comments');
