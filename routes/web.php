<?php

use App\Http\Controllers\BeerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeerController::class, 'home'])->name('home');
Route::get("/beers/index", [BeerController::class, "index"])->name("beer_index");
Route::get("/beers/create", [BeerController::class, "create"])->name("beer_create");
Route::post("/beer/add", [BeerController::class, "add"])->name("beer_add");
Route::get("/beer/detail/{beer}", [BeerController::class, "detail"])->name("beer_detail");
Route::get("/beer/edit/{beer}", [BeerController::class, "edit"])->name("beer_edit");
Route::put("/beer/update/{beer}", [BeerController::class, "update"])->name("beer_update");
Route::delete("/beer/destroy/{beer}", [BeerController::class, "destroy"])->name("beer_destroy");
// form lavora con noi
Route::get("/beers/lavora-con-noi", [BeerController::class, "lavora"])->name("beer_lavora");
