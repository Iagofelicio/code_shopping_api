<?php

use Illuminate\Database\Seeder;

class ProductInputsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = CodeShopping\Product::all();
        factory(CodeShopping\ProductInput::class,150)
            ->make()
            ->each(function($input) use($products){
                $product = $products->random();
                $input->product_id = $products->random()->id;
                $input->save();
            });
    }
}
