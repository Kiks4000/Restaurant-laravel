<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/restaurants', [RestaurantController::class, 'index']);

Route::get('/restaurants/create', [RestaurantController::class, 'create']);

Route::post('/restaurant', [RestaurantController::class, 'store']);

Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);

Route::get('/restaurants/{restaurant}/edit', [RestaurantController::class, 'edit']);

Route::put('/restaurants/{restaurant}', [RestaurantController::class, 'update']);

Route::delete('/restaurants/{restaurant}', [RestaurantController::class, 'destroy']);