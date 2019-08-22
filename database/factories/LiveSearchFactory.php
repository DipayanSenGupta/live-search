<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LiveSearch;
use Faker\Generator as Faker;

$factory->define(LiveSearch::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'address' => $faker->secondaryAddress(),
        'city' => $faker->city(),
        'code' => $faker->postcode(),
        'country' => $faker->country(),
    ];
});
