<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeDropdown extends Model
{
    protected $fillable = ['subcategory_id', 'name', 'attribute_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory'); 
    }
}
