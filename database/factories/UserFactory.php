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
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'is_admin' => 0,
    ];
});

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'rate' => rand(1,10),
        'description' => $faker->text,
        'media_id' => rand(1,2),
        'director_id' => rand(1,15)
    ];
});

$factory->define(App\Cast::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bio'=>$faker->text,
    ];
});

$factory->define(App\Director::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bio' => $faker->text,
    ];
});
