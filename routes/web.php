<?php

use App\Models\Category;
use App\Models\Quest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('quests', function () {
    return view('quests', [ 'quests' => Quest::with('category')->get()]);
});

Route::Get('quest/{quest}', function (Quest $quest) {
   return view('quest', ['quest' => $quest]);
});

Route::Get('category/{category}', function (Category $category) {
   return view('quests', ['quests' => $category->quests]);
});

