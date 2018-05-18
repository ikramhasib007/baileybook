<?php

use Faker\Generator as Faker;

$factory->define(App\TestPost::class, function (Faker $faker) {
    return [
        'category_id' => App\Category::inRandomOrder()->first()->getKey(),
        'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'slug' => $faker->slug,
        'body' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true)
    ];
});
