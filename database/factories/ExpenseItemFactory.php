<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ExpenseItem;
use App\User;
use Faker\Generator as Faker;

$factory->define(ExpenseItem::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'user_id' => function() {
            return User::all()->random();
        },
        'has_elements' => $faker->numberBetween(0, 1),
    ];
});
