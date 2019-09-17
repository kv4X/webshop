<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'name', 'url'];
    protected $hidden = ['created_at', 'updated_at'];
  
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
