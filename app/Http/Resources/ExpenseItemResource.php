<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseItemResource extends JsonResource
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
            'title' => $this->title,
            'user_id' => $this->user_id,
            'elements' => ExpenseElementResource::collection($this->elements()->where('user_id', $this->user_id)->get()),
        ];
    }
}
