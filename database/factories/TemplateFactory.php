<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Template;
use Faker\Generator as Faker;

$factory->define(Template::class, function (Faker $faker) {
    return [
        //
        "name" => $faker->sentence(10),
        "body" => $faker->paragraph,
        "type_id" => factory(App\Type::class)
    ];
});
