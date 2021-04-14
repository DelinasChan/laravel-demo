<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('attach-example')->group(function () {
    Route::get('user/{user}', 'MigrationController@user');
    Route::post('comment/{post}', 'MigrationController@createComment');
    Route::post('post/{user}', 'MigrationController@createPost');
});
