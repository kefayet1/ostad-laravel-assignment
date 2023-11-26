<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


Route::get('/', [PageController::class, "home"]);
Route::get('/about', [PageController::class, "about"]);
Route::get('/project', [PageController::class, "project"]);
Route::get('/contact', [PageController::class, "contact"]);