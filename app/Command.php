<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable = ['number', 'name', 'adresse', 'origin', 'product_1', 'quantity_1', 'tissu_1', 'product_2', 'quantity_2', 'tissu_2', 'product_3', 'quantity_3', 'tissu_3', 'statut', 'total', 'created_at'];
   

}
