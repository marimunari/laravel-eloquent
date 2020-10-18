<?php

use App\Models\SoccerTeam;
use Faker\Generator as Faker;

$factory->define(SoccerTeam::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
    ];
});
