<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];
   // protected $hidden = ['created_at', 'updated_at'];

    public function subCategories()
    {
        return $this->hasMany('App\SubCategory'); 
    }   
}
