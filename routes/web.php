<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/cars/{car}',[CarController::class,'show'])->name('cars.show');