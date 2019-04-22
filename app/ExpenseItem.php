<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends Model
{
    public  $timestamps = false;
    protected $guarded = [];

    public function elements()
    {
        return $this->hasMany(ExpenseElement::class);
    }

}
