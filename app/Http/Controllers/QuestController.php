<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quest;

class QuestController extends Controller
{
    public function all() {
        return view('quests', [
            'quests' => Quest::filter(request(['category']))->get(),
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('id', request('category')),
        ]);
    }

    public function single(Quest $quest) {
        return view('quest', ['quest' => $quest]);
    }
}
