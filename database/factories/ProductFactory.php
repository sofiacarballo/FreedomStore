<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'price'=> $faker->randomFloat(2,1,20),
        'category_id'=>$faker->numberBetween(1,5),

    ];
});
