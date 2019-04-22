<?php

use App\Expense;
use App\ExpenseElement;
use App\ExpenseItem;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 2)->create();
        factory(ExpenseItem::class, 8)->create();
        factory(ExpenseElement::class, 35)->create();
        factory(Expense::class, 350)->create();
    }
}
