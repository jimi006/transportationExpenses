<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\RegisterController;

Auth::routes();


Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/mypage/{id}/costs', 'CostController@index')->name('costs.index');
});

