<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Template;
use Faker\Generator as Faker;

$factory->define(Template::class, function (Faker $faker) {
    return [
        //
        "name" => $faker->sentence(5),
        "body" => $faker->paragraph,
        "type_id" => App\Type::all()->random()->id
    ];
});
