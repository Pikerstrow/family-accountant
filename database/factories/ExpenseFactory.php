<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Expense;
use App\ExpenseElement;
use App\ExpenseItem;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Expense::class, function (Faker $faker) {

    return [
        'user_id' => function(){
            return User::all()->random();
        },
        'expense_item_id' => function(){
            return ExpenseItem::all()->random();
        },
        'expense_element_id' => function(){
            return ExpenseElement::all()->random();
        },
        'sum' => $faker->randomFloat(2, 10, 1500),
        'date' => function(){
            return Carbon::createFromDate(2019, 04, mt_rand(1, 22));
        }
    ];
});
