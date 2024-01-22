<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('signIn');
});
Route::get('/signin',[UserController::class,'signin'])->name('signin');
Route::post('/signin',[UserController::class,'signin_valid'])->name('signin_valid');
Route::get('/signup',[UserController::class,'signup'])->name('signup_valid');
Route::post('/signup',[UserController::class,'signup_valid'])->name('signup_valid');

Route::get('/applications',[UserController::class,'getApp'])->name('getApp');
Route::post('/applications/create',[UserController::class,'app_create'])->name('app_create');

Route::get('/admin',[AdminController::class,'index'])->name('admin');
