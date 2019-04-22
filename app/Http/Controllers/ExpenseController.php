<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Http\Resources\ExpenseResource;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return ExpenseResource::collection(Expense::orderBy('id', 'DESC')->paginate(10));
    }
}
