<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sum' => $this->sum,
            'date' => $this->date,
            'element' => $this->element()->get(['id', 'title']),
            'expense_item' => $this->item()->get(['id', 'title'])
        ];
    }
}
