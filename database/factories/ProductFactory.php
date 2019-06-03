<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(3), 0, -1),
        'price' => $faker->randomFloat(2 , 100, 1500),
        'description' => $faker->sentence(10),
        'long_description'=> $faker->text,

        'category_id' => $faker->numberBetween(1, 5)
    ];
});
