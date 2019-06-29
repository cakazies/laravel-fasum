<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// for room
Route::resource('room','RoomController');
// Route::get('/getrooms', 'RoomController@index')->name('index');
// Route::post('/create', 'RoomController@create')->name('create');
