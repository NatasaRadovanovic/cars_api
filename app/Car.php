<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $fillable = [
        'brand', 'model', 'year', 'maxSpeed', 'isAutomatic', 'engine', 'numberOfDoors'
    ];
}
