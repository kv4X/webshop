<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name', 'subcategory_id', 'dropdown', 'checkbox'];
    protected $hidden = ['created_at', 'updated_at'];

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory'); 
    }

    public function dropdowns()
    {
        return $this->hasMany('App\AttributeDropdown'); 
    }  
}
