<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategories = ['food', 'fruit', 'fashion', 'electronic'];

        foreach($productCategories as $productCategory){
            ProductCategory::create([
                'name' => $productCategory
            ]);
        }
    }
}
