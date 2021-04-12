<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('migration')->group(function () {
    Route::get('user/{user}', 'MigrationController@user');
    Route::get('post/{post}', 'MigrationController@post');
    Route::post('comment/{post}', 'MigrationController@createComment');
});
