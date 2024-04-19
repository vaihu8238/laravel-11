<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, ('index')]);
Route::get('/home', [HomeController::class, ('index')]);


Route::get('/register', [HomeController::class, ('registerpage')])->middleware('guest');
Route::post('/register', [HomeController::class, ('registerdata')]);


Route::get('/login', [HomeController::class, ('loginpage')])->middleware('guest');
Route::post('/login', [HomeController::class, ('loginvalidate')]);

Route::get('/logout',[HomeController::class,'logout']);

Route::get('/forgotpassword',[PasswordResetController::class,'forgotpassword']);
Route::post('/forgotpassword',[PasswordResetController::class,'storeforget']);

Route::get('/resetpass/{token}',[PasswordResetController::class,'resetpass']);
Route::post('/resetpass/{token}',[PasswordResetController::class,'resetpass_store']);


Route::get('/addreview',[ReviewController::class,'addreview']);

Route::get('/user_profile/{id}', [HomeController::class, ('userlist_id')]);

Route::get('/adminhome',[HomeController::class,'adminhome']);

Route::get('/addmusic', [MusicController::class, ('addmusic')]);
Route::post('/addmusic', [MusicController::class, ('addmusic_data')]);


Route::get('/musiclist', [MusicController::class, ('musiclist')]);
Route::post('/musiclist/{id}', [MusicController::class, ('delmusic')]);

Route::get('/userlist', [MusicController::class, ('userlist')]);
