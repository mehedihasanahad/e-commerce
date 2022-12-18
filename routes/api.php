<?php
/**
 * Author: Mehedi Hasan Ahad
 * Date: 12/17/2022
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function() {
    Route::post('{any}', 'ApiController@handle');
});

Route::group(['prefix' => 'v1/admin'], function() {
    // category controllers
    Route::resource('category', 'Admin\CategoryController');
});

