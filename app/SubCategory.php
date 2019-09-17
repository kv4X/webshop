<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = ['name', 'description', 'category_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Category'); 
    }

    public function attributes()
    {
        return $this->hasMany('App\Attribute', 'subcategory_id');
    }
}
