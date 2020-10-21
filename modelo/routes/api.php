<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'blog'], function () {
    Route::group(['as' => 'blog'], function () {
        Route::delete('{id}', 'Blog\BlogController@delete')->name('.delete');
    });
});

Route::group(['prefix' => 'slide'], function () {
    Route::group(['as' => 'slide'], function () {
        Route::delete('{id}', 'Slide\SlideController@delete')->name('.delete');
    });
});

Route::group(['prefix' => 'schedule'], function () {
    Route::group(['as' => 'schedule'], function () {
        Route::post('', 'Schedule\ScheduleController@create')->name('.create');
        Route::post('updateStatus', 'Schedule\ScheduleController@edit')->name('.edit');
    });
});

