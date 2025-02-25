<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/PCs', 'App\Http\Controllers\ComputerController@index')->name('computer.index');
Route::get('/PCs/create', 'App\Http\Controllers\ComputerController@create')->name('computer.create');
Route::post('/PCs/save', 'App\Http\Controllers\ComputerController@save')->name('computer.save');
Route::get('/PCs/{id}', 'App\Http\Controllers\ComputerController@index')->name('computer.show');
