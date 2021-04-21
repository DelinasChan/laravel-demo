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

//Command Job
Route::prefix('job-example')->group(function () {
    Route::get('start', 'JobController@start');
});

//活動紀錄
Route::prefix('activity-example')->group(function () {

    Route::prefix('post')->group(function () {
        //取得文章
        Route::get('{id}', 'ActivityController@createPost');
        //建立文章
        Route::post('', 'ActivityController@createPost');
        //刪除文章
        Route::put('{id}', 'ActivityController@editPost');
        //編輯文章
        Route::delete('{id}', 'ActivityController@deletePost');
    });

});

Route::get('test', function () {
    //呼叫 Heleprs.php 的方法
    test();
});
