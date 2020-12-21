<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\TrafficController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

Auth::routes();


Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/mypage/{id}/costs/{month}', 'CostController@index')->name('costs.index');
    Route::get('/mypage/create', 'trafficController@showCreateForm')->name('mypage.create');
    Route::post('/mypage/create', 'trafficController@create');
});

