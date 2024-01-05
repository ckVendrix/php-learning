<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function single(Category $category) {
        return view('quests', ['quests' => $category->quests->load(['user']), 'categories' => Category::all(), 'currentCategory' => $category]);
    }
}
