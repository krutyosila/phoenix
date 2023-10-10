<?php

use Illuminate\Support\Facades\Route;


Route::get('', ['as' => 'home', 'uses' => 'App\Http\Controllers\HomeController@home']);
Route::any('contact', ['as' => 'contact', 'uses' => 'App\Http\Controllers\HomeController@contact']);
Route::get('verification', ['as' => 'verification', 'uses' => 'App\Http\Controllers\HomeController@verification']);
Route::get('brand/{id}', ['as' => 'brand', 'uses' => 'App\Http\Controllers\HomeController@brand']);
Route::get('product/{id}', ['as' => 'product', 'uses' => 'App\Http\Controllers\HomeController@product']);

