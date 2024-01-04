<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Quest;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Quest::truncate();

        $user = User::factory()->create([
           'username' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $cat = Category::create([
            'name' => 'Main',
        ]);

        Quest::create([
            'title' => 'Title',
            'description' => 'Description',
            'user_id' => $user->id,
            'category_id' => $cat->id,
        ]);
    }
}
