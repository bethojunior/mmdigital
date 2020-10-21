<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/','Home\HomeController@index');;


Route::group(['prefix' => 'home'], function () {
    Route::group(['as' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('.home');
    });
});

Route::group(['prefix' => 'blog'], function () {
    Route::group(['as' => 'blog'], function () {
    });
});

Route::group(['prefix' => 'info'], function () {
    Route::group(['as' => 'info'], function () {
    });
});
