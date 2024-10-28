<?php

use App\Http\Controllers\FamilyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FamilyController::class, "index"])->name("home");
Route::get('/families/characters', [FamilyController::class, "table"])->name("family.table");
Route::get('/families/{slug}/{id}', [FamilyController::class, "show"])->name("family.show")->whereAlpha("slug")->whereNumber("id");
Route::get('/families/{slug}', [FamilyController::class, "list"])->name("family.list")->whereAlpha("slug");
