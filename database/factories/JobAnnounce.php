<?php

use Faker\Generator as Faker;

$factory->define(App\job_announce::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'company'=>$faker->company,
        'num_emp'=>$faker->numberBetween(0,10),
        'summary'=>$faker->sentence,
        'date_start'=>$faker->date('Y-m-d','now'),
        'date_expire'=>$faker->date('Y-m-d','now'),
        'email'=>$faker->companyEmail
    ];
});
