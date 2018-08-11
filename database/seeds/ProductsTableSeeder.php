<?php

use CodeShopping\Product;
use CodeShopping\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = Category::all();
        factory(Product::class,7)->create()->each(function(Product $product) use($categories){
            
            $categoryId1 = $categories->random()->id;
            $categoryId2 = $categories->random()->id;
            
            $product->categories()->attach($categoryId1);
            $product->categories()->attach($categoryId2);

        });
    }
}
