<?php

use App\Http\Controllers\BeerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeerController::class, 'home'])->name('home');
Route::get("/beers/index", [BeerController::class, "index"])->name("beer_index");
Route::get("/beers/create", [BeerController::class, "create"])->name("beer_create");
Route::post("/beer/add", [BeerController::class, "add"])->name("beer_add");
