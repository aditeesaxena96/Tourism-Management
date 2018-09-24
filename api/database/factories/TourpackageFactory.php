<?php

use Faker\Generator as Faker;

$factory->define(App\Tourpackage::class, function (Faker $faker) {
    return [
        'packageName'=> $faker->text(50),
        'packageType'=> $faker->text(50),
        'packageLocation' => $faker->text(50),
        'packagePrice' => $faker->text(50),
        'packageFeatures' => $faker->text(50),
        'packageImage' => $faker->text(50)
    ];
});
