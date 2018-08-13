<?php

namespace CodeShopping\Rules;

use Illuminate\Contracts\Validation\Rule;
use Codeshopping\Product;

class HasStock implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->product->stock - $value >= 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The product {$this->product->name} dosen't have sufficient stock";
    }
}
