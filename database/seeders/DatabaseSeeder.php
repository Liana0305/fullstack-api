<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Product 1', 'price' => 5000]);
        Product::create(['name' => 'Product 2', 'price' => 15000]);
        Product::create(['name' => 'Product 3', 'price' => 3000]);
    }
}
