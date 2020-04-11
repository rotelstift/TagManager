<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Information;
use Faker\Generator as Faker;

$factory->define(Information::class, function (Faker $faker) {
    return [
        //
        "name" => $faker->sentence(5),
        "template_id" => factory(App\Template::class),
    ];
});
