<?php

use Illuminate\Support\Facades\Route;

Route::get('admin-login', function(){
	return view('admin.auth.login');
})->name('admin.login');

//admin area



Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'], function(){
	
	Route::get('/admin/home', 'AdminController@adminIndex')->name('admin.home');
	Route::get('/admin/logout','AdminController@adminLogout')->name('admin.logout');


});




