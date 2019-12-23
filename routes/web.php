<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/profile', 'Auth\ProfileController@edit')->name('edit-profile');

Route::put('/profile', 'Auth\ProfileController@update')->name('update-profile');