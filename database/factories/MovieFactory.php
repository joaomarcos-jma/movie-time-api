<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    
    return [
        'title' => $faker->text,
        'genre_id' => null,
        'overview' => $faker->text,
        'streaming' => $faker->randomElement(Movie::STREAMING),
        'runtime' => $faker->numberBetween($min = 60, $max = 300),
        'logo_path' => $faker->text
    ];
});
