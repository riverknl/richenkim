<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guest;
use Faker\Generator as Faker;

$factory->define(Guest::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'street' => $faker->streetName . ' ' . $faker->randomNumber(2),
        'postcode' => $faker->postcode,
        'city' => $faker->city,
        'token' => Str::random(4),
        'special_guest' => $faker->boolean,
        'is_coming' => $faker->boolean,
    ];
});
