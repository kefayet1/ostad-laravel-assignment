<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("hello", [UserController::class, "userMessage"]);

// profile
Route::get("/profile/{id}",[ProfileController::class,"index"]);