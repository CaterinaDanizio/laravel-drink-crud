<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [

        'name' => $faker->word,
        'alcohol_content' => $faker-> numberBetween($min = 0, $max = 50),
        'price' => $faker-> numberBetween($min = 10, $max = 200)
    ];
});
