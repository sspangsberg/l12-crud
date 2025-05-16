<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new \App\Models\Product([
          'name' => 'Product #1',
          'detail' => 'Product #1 details'
        ])->save();

        $product = new \App\Models\Product([
          'name' => 'Product #2',
          'detail' => 'Product #2 details'
        ])->save();

        $product = new \App\Models\Product([
          'name' => 'Product #3',
          'detail' => 'Product #3 details'
        ])->save();

        $product = new \App\Models\Product([
          'name' => 'Product #4',
          'detail' => 'Product #4 details'
        ])->save();

        $product = new \App\Models\Product([
          'name' => 'Product #5',
          'detail' => 'Product #5 details'
        ])->save();
    }
}
