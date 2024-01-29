<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('index');
});
Route::post('/signin',[UserController::class,'signin']);
Route::post('/signup',[UserController::class,'signup']);

Route::get('/applications',[ApplicationController::class,'AppList']);
Route::get('/appCreate',function () {
    return view('createApplication');
});

Route::post('/create',[ApplicationController::class,'create']);

Route::get('/logout',[UserController::class,'logout']);

Route::get('/admin',[AdminController::class,'admin']);

Route::get('/confirm/{id}',[AdminController::class,'confirm']);
Route::get('/decline/{id}',[AdminController::class,'decline']);

Route::get('/applications/sort', [ApplicationController::class,'appSort']);
