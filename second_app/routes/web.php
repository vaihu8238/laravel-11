<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('News',NewController::class);