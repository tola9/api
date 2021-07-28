<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name, 
            "body" => $this->details,
            "rating" => round($this->reviews->sum('star') / $this->reviews->count(), 2),
            "totalPrice" => round(($this->price) - $this->price * (($this->discount)/ 100), 2)
        ];
    }
}
