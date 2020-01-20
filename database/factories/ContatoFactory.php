<?php

use Faker\Generator as Faker;

$factory->define(App\Contato::class, function (Faker $faker) {//usuario sendo criado pelo metodo factory e classe faker.
    return [
            'nome' => $faker->name,
            'telefone' => $faker->cellphoneNumber,
            'email' => $faker->unique()->safeEmail,
            'data_nasc' => $faker->date('Y-m-d'),
    ];
});
