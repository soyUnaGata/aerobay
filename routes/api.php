<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;

Route::apiResource('accessories', AccessoryController::class);

