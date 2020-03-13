<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Servidor;
use Faker\Generator as Faker;

$factory->define(Servidor::class, function (Faker $faker) {
    return [
        "descripcion"=> $faker->text(200),
        "ip"=> $faker->ipv4,
        "host"=> $faker->domainName,
        'ext'=> 'jpg'
    ];
});
