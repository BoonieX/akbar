<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('/',HomeController::class);
Route::resource('dashboard',DashboardController::class);