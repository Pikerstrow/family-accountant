<?php

namespace App\Http\Controllers;

use App\ExpenseItem;
use App\Http\Resources\ExpenseItemResource;
use Illuminate\Http\Request;

class ExpenseItemController extends Controller
{
    public function index()
    {
        return ExpenseItemResource::collection(ExpenseItem::orderBy('id', 'DESC')->get());
    }
}
