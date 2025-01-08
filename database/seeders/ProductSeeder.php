<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert(
            [
                ['name' => 'laptop', 'category' => 'Electronics', 'price' => '54000'],
                ['name' => 'Iphone 16 Pro Max', 'category' => 'Electronics', 'price' => '140000'],
                ['name' => 'Table', 'category' => 'Furniture', 'price' => '14000'],
            ]
        );
    }
}
