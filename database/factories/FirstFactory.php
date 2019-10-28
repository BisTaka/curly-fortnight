<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\First;
use Faker\Generator as Faker;

$factory->define(First::class, function (Faker $faker) {
    return [
        'tinggi_badan' => $faker->randomDigit,
        'berat_badan' => $faker->randomDigit,
        'tensi_user' => '130/80',
    ];
});
