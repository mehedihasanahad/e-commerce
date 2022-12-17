<?php
/**
 * Author: Mehedi Hasan Ahad
 * Date: 12/17/2022
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function() {
    Route::post('{any}', 'ApiController@handle');

    // category controllers
    Route::resource('category', 'Admin\CategoryController');
});

