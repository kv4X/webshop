<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Attribute extends JsonResource
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
            'subcategory_id' => $this->subcategory_id,
            'name' => $this->name,
            'dropdown' => $this->dropdown,
            'dropdown_list' => $this->dropdowns ?: 0,
            'checkbox' => $this->checkbox,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
