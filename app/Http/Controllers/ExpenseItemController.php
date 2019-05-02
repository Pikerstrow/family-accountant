<?php

namespace App\Http\Controllers;

use App\ExpenseItem;
use App\Http\Resources\ExpenseItemResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpenseItemController extends Controller
{
    public function index()
    {
        return ExpenseItemResource::collection(ExpenseItem::orderBy('id', 'DESC')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:30|cyrillic',
            'has_elements' => 'required|boolean'
        ]);

        $item = auth()->user()->expenseItems()->create($validated);

        return response([
            'message' => 'Expense Item created!',
            'item' => $item
        ], Response::HTTP_CREATED);

    }
}
