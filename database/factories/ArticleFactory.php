<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title'=>$title,
        'slug'=>str_slug($title),
        'body'=>$faker->text
    ];
});
