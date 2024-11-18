<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Ale-Ale',
            'description' => 'ini adalah minuman produk Ale-ale',
            'price' => 2000.0,
            'category_id' => 1,
            'created_at' => '2024-11-18 05:04:59',
            'updated_at' => '2024-11-18 05:04:59'
        ]);

        Product::create([
            'name' => 'Teh Gelas',
            'description' => 'ini adalah minuman produk teh gelas',
            'price' => 5000.0,
            'category_id' => 1,
            'created_at' => '2024-11-18 05:04:59',
            'updated_at' => '2024-11-18 05:04:59'
        ]);

        Product::create([
            'name' => 'Magnum',
            'description' => 'ini es krim magnum',
            'price' => 12000.0,
            'category_id' => 2,
            'created_at' => '2024-11-18 05:04:59',
            'updated_at' => '2024-11-18 05:04:59'
        ]);
    }
}