<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['store_id','name','image','price','quantity'];

    public function store(){
        return $this->belongsTo('App\Store');
    }
}
