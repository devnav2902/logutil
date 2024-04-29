<?php

use Illuminate\Support\Facades\Route;

Route::get('/log-util', function (){
    return 'hello';
});

Route::namespace('Devnav2902\Http\Controllers')->group(function () {
    Route::get('/', 'LogUtilController@index');
});