<?php

use Faker\Generator as Faker;

$factory->define(CodeShopping\ProductOutput::class, function (Faker $faker) {
    return [
        'amount' => $faker->numberBetween(1,2)
    ];
});
