<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'registration' =>$faker->bothify('##-??-##'),
        'year_of_manufacture' =>$faker->year,
        'color' =>$faker->colorName,
        'brand_id' =>rand(1,69),
    ];
});
