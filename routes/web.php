<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//資料表關聯 attach join
Route::prefix('attach-example')->group(function () {
    Route::get('user/{user}', 'MigrationController@user');
    Route::post('comment/{post}', 'MigrationController@createComment');
    Route::post('post/{user}', 'MigrationController@createPost');
});

//登入認證 auth
Route::prefix('auth-example')->group(function () {
    Route::post('register', 'GuardController@register');
    Route::post('login', 'GuardController@login');
    Route::get('show', 'GuardController@show');
});
