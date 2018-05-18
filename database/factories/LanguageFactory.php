<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->languageCode
    ];
});
