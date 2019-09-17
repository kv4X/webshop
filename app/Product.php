<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['subcategory_id', 'user_id', 'name', 'description', 'price'];
    protected $hidden = ['created_at', 'updated_at'];
   
    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }   
}
