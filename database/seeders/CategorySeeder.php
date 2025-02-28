<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'categoryID' => 'C001',
                'categoryName' => 'Fruits',
                'categoryDescription' => 'Fresh and organic fruits.',
                'image' => 'storage/images/fruits.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C002',
                'categoryName' => 'Vegetables',
                'categoryDescription' => 'Healthy and green vegetables.',
                'image' => 'storage/images/vegetables.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C003',
                'categoryName' => 'Dairy Products',
                'categoryDescription' => 'Milk, cheese, and other dairy items.',
                'image' => 'storage/images/dairy.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C004',
                'categoryName' => 'Bakery',
                'categoryDescription' => 'Freshly baked bread and pastries.',
                'image' => 'storage/images/bakery.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C005',
                'categoryName' => 'Snacks',
                'categoryDescription' => 'Chips, cookies, and other quick bites.',
                'image' => 'storage/images/snacks.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C006',
                'categoryName' => 'Meat and Poultry',
                'categoryDescription' => 'Fresh cuts of meat and poultry products.',
                'image' => 'storage/images/meat.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C007',
                'categoryName' => 'Seafood',
                'categoryDescription' => 'Fresh fish and seafood items.',
                'image' => 'storage/images/seafood.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C008',
                'categoryName' => 'Beverages',
                'categoryDescription' => 'Soft drinks, juices, and other beverages.',
                'image' => 'storage/images/beverages.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C009',
                'categoryName' => 'Condiments and Spices',
                'categoryDescription' => 'Sauces, spices, and cooking essentials.',
                'image' => 'storage/images/condiments.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C010',
                'categoryName' => 'Frozen Foods',
                'categoryDescription' => 'Frozen meals, vegetables, and desserts.',
                'image' => 'storage/images/frozen_foods.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C011',
                'categoryName' => 'Health and Beauty',
                'categoryDescription' => 'Personal care products and cosmetics.',
                'image' => 'storage/images/health_beauty.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoryID' => 'C012',
                'categoryName' => 'Household Items',
                'categoryDescription' => 'Cleaning supplies and household essentials.',
                'image' => 'storage/images/household.jpg', // Path relative to the public directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
    
        ]);
    }
}
