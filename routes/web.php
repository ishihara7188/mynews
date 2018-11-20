<?php

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
