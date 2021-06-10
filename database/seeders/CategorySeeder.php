<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create(['name' => 'News', 'slug' => 'news']);
        $category = Category::create(['name' => 'sports', 'slug' => 'sports']);
        $category = Category::create(['name' => 'International', 'slug' => 'international']);
    }
}
