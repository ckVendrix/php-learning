<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestController;
use App\Models\Category;
use App\Models\Quest;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home'));

Route::get('quests', [QuestController::class, 'index']);

Route::Get('quests/{quest}', [QuestController::class, 'show']);

