<?php

use App\Http\Controllers\SubcategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Swagger\ManufactoryController;

Route::apiResource('accessories', AccessoryController::class);

Route::apiResource('categories', CategoryController::class);

Route::apiResource('manufactory', ManufactoryController::class);

Route::apiResource('subcategory', SubcategoryController::class);
