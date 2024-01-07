<?php

use App\Http\Controllers\QuestController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home'));

Route::get('quests', [QuestController::class, 'index']);

Route::Get('quests/{quest}', [QuestController::class, 'show']);

Route::get('register', [RegisterController::class, 'create']);

Route::post('register', [RegisterController::class, 'store']);

