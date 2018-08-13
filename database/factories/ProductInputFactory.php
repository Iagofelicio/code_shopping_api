<?php

use Faker\Generator as Faker;

$factory->define(CodeShopping\ProductInput::class, function (Faker $faker) {
    return [
        'amount' => $faker->numberBetween(10,30)
    ];
});
