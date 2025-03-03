<?php

use Illuminate\Support\Facades\Route;

Route::prefix('ocadmin')->namespace('Ocadmin')->group(function () {
    Route::get('/', function () {
        return view('ocadmin.dashboard');
    });
});