<?php

use Faker\Generator as Faker;

$factory->define(App\job_announce::class, function (Faker $faker) {
    return [
        'name'=>$faker->jobTitle,
        'company'=>$faker->company,
        'com_about'=>$faker->paragraph,
        'num_emp'=>$faker->numberBetween(1,10),
        'summary'=>$faker->sentence,
        'education'=>$faker->name,
        'date_start'=>$faker->date('Y-m-d','now'),
        'date_expire'=>$faker->date('Y-m-d','now'),
        'email'=>$faker->companyEmail
    ];
});
