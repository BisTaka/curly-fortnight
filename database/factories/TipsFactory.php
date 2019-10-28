<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tips;
use Faker\Generator as Faker;

$factory->define(Tips::class, function (Faker $faker) {
    return [
        'tips_user' => $faker->text(100),
    ];
});
