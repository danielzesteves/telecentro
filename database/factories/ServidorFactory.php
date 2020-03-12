<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Servidor;
use Faker\Generator as Faker;

$factory->define(Servidor::class, function (Faker $faker) {
    return [
        "descripcion"=> $faker->text(200),
        "ip"=>"10.85.233.21"
    ];
});
