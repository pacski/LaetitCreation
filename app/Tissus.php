<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tissus extends Model
{
    protected $fillable = ['name', 'stock', 'image'];
}
