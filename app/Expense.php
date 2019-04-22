<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function element()
    {
        return $this->belongsTo(ExpenseElement::class, 'expense_element_id');
    }

    public function item()
    {
        return $this->belongsTo(ExpenseItem::class, 'expense_item_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
