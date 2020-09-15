<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Diretor;
use Faker\Generator as Faker;

$factory->define(Diretor::class, function (Faker $faker) {
    return [
        "nome" => $faker->name
    ];
});
