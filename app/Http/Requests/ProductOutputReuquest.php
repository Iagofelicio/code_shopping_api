<?php

namespace CodeShopping\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use CodeShopping\Product;
use CodeShopping\Rules\HasStock;

class ProductOutputReuquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //** @var Product $product */
        $product = Product::findOrFail($this->product_id);
        return [
            'amount' => ['required','integer','min:1',new HasStock($product)],
        ];
    }
}
