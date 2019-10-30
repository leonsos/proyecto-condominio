<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Residence;
use Faker\Generator as Faker;

$factory->define(Residence::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'address'=>$faker->sentence,
        'phone'=>$faker->word,
        'city'=>$faker->word,
        'president'=>$faker->word,
        'president_phone'=>$faker->word,
    ];
});
