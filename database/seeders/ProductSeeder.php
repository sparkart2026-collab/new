<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $painRelief = Category::firstWhere('slug', 'pain-relief');
        $diabetes = Category::firstWhere('slug', 'diabetes-care');
        $vitamins = Category::firstWhere('slug', 'vitamins-supplements');

        $products = [
            [
                'category_id' => $painRelief?->id,
                'name' => 'FlexiRelief Pain Tablets',
                'brand' => 'Healix',
                'salt' => 'Ibuprofen 400mg',
                'price' => 120,
                'mrp' => 150,
                'stock' => 120,
                'prescription_required' => false,
            ],
            [
                'category_id' => $painRelief?->id,
                'name' => 'MuscleEase Gel',
                'brand' => 'OrthoCare',
                'salt' => 'Diclofenac',
                'price' => 95,
                'mrp' => 110,
                'stock' => 80,
                'prescription_required' => false,
            ],
            [
                'category_id' => $diabetes?->id,
                'name' => 'GlucoBalance Tablets',
                'brand' => 'SugarCheck',
                'salt' => 'Metformin 500mg',
                'price' => 210,
                'mrp' => 240,
                'stock' => 60,
                'prescription_required' => true,
            ],
            [
                'category_id' => $vitamins?->id,
                'name' => 'Daily Vital Multivitamin',
                'brand' => 'NutriPlus',
                'salt' => 'Multivitamin Blend',
                'price' => 399,
                'mrp' => 450,
                'stock' => 200,
                'prescription_required' => false,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                ...$product,
                'slug' => Str::slug($product['name']),
                'description' => 'High-quality medicine with verified sourcing.',
                'image_path' => 'images/products/sample.png',
                'is_active' => true,
            ]);
        }
    }
}
