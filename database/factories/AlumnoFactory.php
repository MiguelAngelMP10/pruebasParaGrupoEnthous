<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombreCompleto' =>  $faker->name(),
        'matricula' => $faker->text(10),
        'fechaNacimiento' => $faker->date()
    ];
});