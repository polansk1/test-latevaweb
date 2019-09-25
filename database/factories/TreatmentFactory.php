<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Treatment;
use App\Patient;
use Faker\Generator as Faker;

$factory->define(Treatment::class, function (Faker $faker) {
    return [
        'name'        => $faker->word,
        'description' => $faker->text(500)
    ];
});
