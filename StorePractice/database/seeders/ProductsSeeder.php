<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use App\database\factories\ProductsFactory;

class ProductsSeeder extends Seeder
{
    public function run(): void {
        Products::factory()->count(20)->create();
    }
}
