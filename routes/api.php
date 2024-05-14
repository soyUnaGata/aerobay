<?php

use App\Http\Controllers\DroneController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufactureController;

Route::apiResource('accessories', AccessoryController::class);

Route::apiResource('categories', CategoryController::class);

Route::apiResource('manufactures', ManufactureController::class);

Route::apiResource('subcategory', SubcategoryController::class);

Route::apiResource('drones', DroneController::class);

Route::apiResource('groups', GroupController::class);
