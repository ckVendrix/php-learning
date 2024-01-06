<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategorySelector extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.category-selector', [
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('id', request('category'))
        ]);
    }
}
