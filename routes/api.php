<?php

// for room
Route::resource('room','RoomController');
Route::resource('borrow','BorrowController');

Route::group([
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


// example
// Route::get('/getrooms', 'RoomController@index')->name('index');
// Route::post('/create', 'RoomController@create')->name('create');
