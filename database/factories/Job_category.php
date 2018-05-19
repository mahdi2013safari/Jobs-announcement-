<?php

use Faker\Generator as Faker;

$factory->define(App\Job_category::class, function (Faker $faker) {
    return [
        'field'=>$faker->unique()->fileExtension
    ];
});
