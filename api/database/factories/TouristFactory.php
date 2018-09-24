<?php

use Faker\Generator as Faker;

$factory->define(App\Tourist::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(50),
        'mobileNumber'=> $faker->text(50),
        'email' => $faker->text(50),
        'password' => $faker->text(50)
    ];
});
