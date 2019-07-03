<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return "index ";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',function() {
    return view('admin');
})->name('adminpage');

Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');

Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);

Route::get('admin-register', 'Auth\AdminLoginController@RegisterPage');

Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');