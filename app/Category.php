<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];


    // hasOne
    // hasMany
    // belongsTo
    // belongsToMany

    public function products() {
        return $this->hasMany('\App\Product', 'categories_id');
    }


}
