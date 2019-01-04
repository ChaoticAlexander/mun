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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/playground', 'PagesController@play');
Auth::routes();

Route::get('admin/login','Auth\AdminAuth@showLoginForm');
Route::post('admin/login','Auth\AdminAuth@login')->name('admin.login');

Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/','AdminController@index')->name('admin.home');
    Route::get('/register','AdminController@showRegisterForm')->name('admin.register');
    Route::post('/register','AdminController@register')->name('admin.register.submit');
});