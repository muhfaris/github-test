<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
<<<<<<< HEAD
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'title' => $faker->sentence,
        'name' => $faker->name,
        'content' => $faker->paragraph(30),
        'updated_at' => $faker->dateTimeThisMonth,
=======
>>>>>>> lumenContainer
    ];
});
