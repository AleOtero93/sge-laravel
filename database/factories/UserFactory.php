<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
        'codigo' => str_random(10),
        'consumoMensualMinimo' => rand(0,50),
        'consumoMensualMaximo' => rand(51,150),
        'cargoFijo' => rand(2,50),
        'cargoVariable' => rand(1,5),
    ];
});

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstname,
        'apellido' => $faker->lastname,
        'domicilio' => $faker->lastname,
        'telefono' => $faker->phone,
        'fechaAlta' => $faker->now(),
        'tipoDocumento' => App\tipoDocumento::DNI,
        'numeroDocumento' => rand(0,40000000),
        'categoria' => function(){
        	return factory(App\Categoria::class)->create()->id;
        },
        'usuario' => str_random(rand(6,12)),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
});