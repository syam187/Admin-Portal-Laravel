<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;


Route::get('/', function () {
    return view('welcome');
});

// check on busta portal how to write controllers

Route::get('/home', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'index']);

Route::prefix('admin')->group(function() {

    Route::get('/dashboard', [DashboardController::class,'index']);
    
});