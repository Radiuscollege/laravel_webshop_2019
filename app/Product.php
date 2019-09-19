<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['naam', 'prijs', 'categorie_id'];
    
    public $timestamps = false;

    public function category() {
        return $this->belongsTo('\App\Category', 'categories_id');
    }

}
