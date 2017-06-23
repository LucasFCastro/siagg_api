<?php

use App\Oficio;


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Oficio::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'destinatario' => $faker->company,
        'assunto' => $faker->sentence(6),
        'data_envio' => $faker->date(),
        'user_id' => $faker->numberBetween(1, 20)
    ];
});
