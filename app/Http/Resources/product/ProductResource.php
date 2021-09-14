<?php

namespace App\Http\Resources\product;

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
            "price" => $this->price,
            "stock" => $this->stock > 0 ? $this->stock : 'Out of stock',
            "discount" => $this->discount,
            "rating" => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/ $this->reviews->count()) : 'Not rating yet'
        ];
    }
}
