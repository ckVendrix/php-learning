@props(['categories', 'currentCategory'])

<div x-data="{ show: false }">
    <button @click="show = !show">{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}</button>
    <div x-show="show">
        <a href="/quests">All</a>
        @foreach($categories as $category)
            <a href="/quests?category={{$category->id}}">{{ucwords($category->name)}}</a>
        @endforeach
    </div>
</div>
