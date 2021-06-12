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
        $category = Category::create(['name' => 'Nacionales', 'slug' => 'nacionales']);
        $category = Category::create(['name' => 'Deportes', 'slug' => 'deportes']);
        $category = Category::create(['name' => 'Internacionales', 'slug' => 'nacionales']);
    }
}
