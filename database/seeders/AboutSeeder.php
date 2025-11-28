<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'subtitle' => 'Bring your dream into Reality',
            'image' => '1708111815-Trademark Education - Landscape.png',
            'description' => 'A well-known export and import business with headquarters in Kathmandu, Nepal, is Ktm Nepal Logistic. The organization is committed to giving businesses of all sizes effective logistics solutions so they can import and export goods around the world. ',
            'content' => 'A well-known export and import business with headquarters in Kathmandu, Nepal, is Ktm Nepal Logistic. The organization is committed to giving businesses of all sizes effective logistics solutions so they can import and export goods around the world. ',


        ]);
        // About::factory()->count(1)->create();
    }
}
