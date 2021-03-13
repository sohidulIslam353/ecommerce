<?php

use Illuminate\Support\Facades\Route;

Route::get('admin-login', function(){
	return view('admin.auth.login');
})->name('admin.login');

//admin area
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home')->middleware('is_admin');




