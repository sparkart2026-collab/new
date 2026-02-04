<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Pain Relief',
            'Diabetes Care',
            'Skin Care',
            'Vitamins & Supplements',
            'Ayurveda',
            'Women Wellness',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => "Popular {$name} products.",
                'is_active' => true,
            ]);
        }
    }
}
