<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ExpenseElement;
use App\ExpenseItem;
use App\User;
use Faker\Generator as Faker;

$factory->define(ExpenseElement::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'expense_item_id' => function() {
            return ExpenseItem::all()->random();
        },
        'title' => $faker->word
    ];
});
