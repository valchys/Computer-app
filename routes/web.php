<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/PCs/create-PC', 'App\Http\Controllers\ComputerController@create')->name('computer.create');
Route::post('/PCs/save', 'App\Http\Controllers\ComputerController@save')->name('computer.save');
