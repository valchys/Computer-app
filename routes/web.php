<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/computers', 'App\Http\Controllers\ComputerController@index')->name('computer.index');
Route::get('/computers/create', 'App\Http\Controllers\ComputerController@create')->name('computer.create');
Route::post('/computers/save', 'App\Http\Controllers\ComputerController@save')->name('computer.save');
Route::get('/computers/{id}', 'App\Http\Controllers\ComputerController@show')->name('computer.show');
Route::delete('/computers/{id}/delete', 'App\Http\Controllers\ComputerController@delete')->name('computer.delete');
