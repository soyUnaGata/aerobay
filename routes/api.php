<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\CategoryController;

Route::apiResource('accessories', AccessoryController::class);

Route::apiResource('categories', CategoryController::class);
