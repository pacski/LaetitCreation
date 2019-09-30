<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'description', 'cost', 'price', 'production_time', 'nbmade'];
    public $timestamps = false;

}
