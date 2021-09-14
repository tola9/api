<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            "name" => $this->name,
            "details" => $this->details,
            "discount" => $this->discount,
            "price" => $this->price,
            "stock" => $this->stock == 0 ? "Out of stock" : $this->stock,
            "rating" => $this->reviews->count() > 0 ? round($this->reviews->sum('star') / $this->reviews->count(),2) : "Not rating yet"
        ];
    }
}
