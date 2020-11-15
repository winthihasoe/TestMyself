<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;

Route::get('/',[IndexController::class, 'index']);

Route::post('/',[IndexController::class,'postData']);
