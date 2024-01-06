<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quest;

class QuestController extends Controller
{
    public function index() {
        return view('quests.index', [
            'quests' => Quest::filter(request(['category']))->get()
        ]);
    }

    public function show(Quest $quest) {
        return view('quests.show', ['quest' => $quest]);
    }
}
