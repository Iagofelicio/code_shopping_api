<?php

namespace CodeShopping\Http\Controllers;

use CodeShopping\Product;
use CodeShopping\Category;
use Illuminate\Http\Request;
use CodeShopping\Http\Requests\ProductCategoryRequest;
use CodeShopping\Http\Resources\ProductCategoryResource;

class ProductCategoryController extends Controller
{

    
    public function index(Product $product)
    {
        return new ProductCategoryResource($product);
    }

   
    public function store(ProductCategoryRequest $request, Product $product)
    {
        $changed = $product->categories()->sync($request->categories);
        $categoriesIdAttached = $changed['attached'];
        $categories = Category::whereIn('id',$categoriesIdAttached)->get();
        return $categories->count() ? response()->json(new ProductCategoryResource($product),201) : [];
    }


    public function destroy(Product $product, Category $category)
    {
        $product->categories()->detach($category->id);
        return response()->json([],204);
    }
}
