<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    public function all() {
        return view('quests', [ 'quests' => Quest::all(), 'categories' => Category::all(), 'currentCategory' => null]);
    }

    public function single(Quest $quest) {
        return view('quest', ['quest' => $quest]);
    }
}
