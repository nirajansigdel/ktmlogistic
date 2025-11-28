<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['title' => 'Import/Export Guide'],
            ['title' => 'Front Posts'],
            ['title' => 'Advertisers'],
            ['title' => 'News'],
            ['title' => 'Others']
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
