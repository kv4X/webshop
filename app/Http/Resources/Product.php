<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductImageCollection;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
         return [
            'id' => $this->id,
            'subcategory_id' => $this->subcategory_id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'images' => new ProductImageCollection($this->images)
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];       
    }
}
